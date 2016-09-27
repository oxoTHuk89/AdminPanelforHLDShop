<?php

/**
 * Created by PhpStorm.
 * User: sergey.burikov
 * Date: 01.09.2016
 * Time: 14:59
 */
require_once("connect.php");

class ServicesInfo
{
    /**
     * @param PDO $dbh
     * @param string $DataBase
     * @return array ServerList
     */
    public function getServices($dbh, $DataBase)
    {
        $Query = $dbh->prepare("SELECT id, name, access, active FROM " . $DataBase . ".pay_services ORDER BY active");

        try {
            $result = array();
            $Query->execute();
            $Query = $Query->fetchAll(PDO::FETCH_ASSOC);
            if (empty($Query)) {
                $result['error'] = true;
                $result['error_message'] = "На данный момент нет услуг. Добавь первую!";
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

    public function setServices($dbh, $data, $DataBase)
    {
        if ($data['active'] = 'on') {
            $data['active'] = 1;
        }
        $Query = $dbh->prepare("
                            INSERT INTO " . $DataBase . ".pay_services (name, access, active)
                                  VALUES (:name, :access, :active)");
        foreach ($data as $k => &$v) {
            $Query->bindParam(':' . $k, $v, PDO::PARAM_STR);
        }
        try {
            $Query->execute();
            $result['notice'] = true;
            $result['message'] = 'Запись успешно добавлена!';
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
    public function deleteServices($dbh, $data, $DataBase)
    {
        $Query = $dbh->prepare("DELETE FROM " . $DataBase . ".pay_services WHERE id = :id");
        $Query->bindParam(':id', $data['id'], PDO::PARAM_INT);
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