<?php

/**
 * Created by PhpStorm.
 * User: sergey.burikov
 * Date: 01.09.2016
 * Time: 14:59
 */
require_once("connect.php");

class ServicesToServer
{
    /**
     * @param PDO $dbh
     * @param string $DataBase
     * @return array ServerList
     */
    public function setServicesToServer($dbh, $data, $DataBase)
    {
        $query = $dbh->prepare("
                            SELECT 1
                              FROM " . $DataBase . ".pay_type_servers
                             WHERE pay_type = :pay_type
                               AND pay_serverid = :pay_serverid
                               AND cost = :cost");
        foreach ($data as $k => &$v) {
            $v = (int)$v;
            $query->bindParam(':' . $k, $v, PDO::PARAM_STR);
        }
        try {
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $result['error'] = true;
            $result['error_message'] = $e->getMessage();
        }
        if (!$result) {
            $insert = $dbh->prepare("
                            INSERT INTO " . $DataBase . ".pay_type_servers (pay_type, pay_serverid, cost)
                                  VALUES (:pay_type, :pay_serverid, :cost)");

            $update = $dbh->prepare("
                        UPDATE " . $DataBase . ".pay_type_servers
                        SET cost = :cost
                        WHERE pay_serverid = :pay_serverid AND pay_type = :pay_type");

            foreach ($data as $k => &$v) {
                $v = (int)$v;
                $insert->bindParam(':' . $k, $v, PDO::PARAM_STR);
                $update->bindParam(':' . $k, $v, PDO::PARAM_STR);
            }
            try {
                $insert->execute();
                $result['notice'] = true;
                $result['message'] = 'Запись успешно добавлена!';
            } catch (PDOException $e) {
                if ($e->errorInfo[1] === 1062) {
                    try {
                        $update->execute();
                        $result['notice'] = true;
                        $result['message'] = 'Такая запись уже есть, цена обновлена!';
                    } catch (PDOException $e) {
                        $result['error'] = true;
                        $result['error_message'] = $e->getMessage();
                    }
                } elseif ($e->errorInfo[1] === 1452) {
                    $result['error'] = true;
                    $result['error_message'] = $e->getMessage();
                }
            }
        } else {
            $result['error'] = true;
            $result['error_message'] = 'Такая запись уже есть!';
        }
        return $result;
    }

    /**
     * @param PDO $dbh
     * @return array Relations
     */

    public function getRelationss($dbh, $DataBase)
    {
        $Query = $dbh->prepare("
                        SELECT pt.name        AS Type,
                               pt.id          AS TypeId,
                               pts.cost,
                               srv.servername AS HostName,
                               srv.id         AS ServerId
                          FROM " . $DataBase . ".pay_type_servers pts
                          JOIN " . $DataBase . ".pay_services pt
                            ON pt.id = pts.pay_type
                          JOIN " . $DataBase . ".servers srv
                            ON srv.id = pts.pay_serverid
                         ORDER BY servername");
        try {
            $result = array();
            $Query->execute();
            $Query = $Query->fetchAll(PDO::FETCH_ASSOC);
            if (empty($Query)) {
                $result['error'] = true;
                $result['error_message'] = "Список связей пуст. Добавь первую!";
            }
            foreach ($Query as $ExistingList) {
                $result[] = $ExistingList;
            }
        } catch (PDOException $e) {
            $result['error'] = true;
            $result['error_message'] = $e->getMessage();
        }
        return $result;
    }

    /**
     * @param PDO $dbh
     * @param array $data id сервера
     * @return bool True когда успешно удален, False когда произошла ошибка при удалении
     */
    public function deleteRelations($dbh, $data, $DataBase)
    {
        $Query = $dbh->prepare("DELETE FROM " . $DataBase . ".pay_type_servers WHERE pay_type = :pay_type AND pay_serverid = :pay_serverid");
        $Query->bindParam(':pay_type', $data['pay_type'], PDO::PARAM_INT);
        $Query->bindParam(':pay_serverid', $data['pay_serverid'], PDO::PARAM_INT);
        try {
            $Query->execute();
            $result['notice'] = true;
            $result['message'] = 'Связка удалена!';
        } catch (PDOException $e) {
            $result['error'] = true;
            $result['error_message'] = $e->getMessage();
        }
        return $result;
    }
}