<?php

/**
 * Created by PhpStorm.
 * User: sergey.burikov
 * Date: 01.09.2016
 * Time: 14:59
 */
require_once("connect.php");
require_once("SourceQuery.class.php");

class ServerInfo
{
    /**
     * @param PDO $dbh
     * @param string $DataBase
     * @return array ServerList
     */
    public function getServers($dbh, $DataBase)
    {
        $ServersList = $dbh->prepare("SELECT id, ip, port, rcon, type, servername, description FROM " . $DataBase . ".servers ORDER BY servercriteria, type");
        $ServersList->execute();
        $ServersList = $ServersList->fetchAll(PDO::FETCH_ASSOC);
        foreach ($ServersList as $ServerList) {
            if ($ServerList['type'] == "1") {
                $type = SourceQuery :: GOLDSOURCE;
            }
            if ($ServerList['type'] == "2") {
                $type = SourceQuery :: SOURCE;
            }
            $Query = new SourceQuery();
            $Query->Connect($ServerList['ip'], $ServerList['port'], 1, $type);
            $server = $Query->GetInfo();
            $Query->Disconnect();
            //Забираем инфу о всех серверах, проверку делать будем потом
            if ($server != False) {
                $server['Status'] = true;
            } else {
                $server['Status'] = false;
            }
            $result[] = array_merge($server, $ServerList);
        }
        if ($result === NULL) {
            $result['error'] = true;
            $result['error_message'] = "На данный момент нет серверов!";
        }
        return $result;
    }

    /**
     * @param PDO $dbh
     * @return array ServerList
     */

    public function getGames($dbh, $DataBase)
    {
        $GamesList = $dbh->prepare("SELECT id, name, fullname FROM " . $DataBase . ".pay_games ORDER BY id");
        $GamesList->execute();
        $GamesList = $GamesList->fetchAll(PDO::FETCH_ASSOC);
        foreach ($GamesList as $GameList) {
            $result[] = $GameList;
        }
        return $result;
    }

    /**
     * @param PDO $dbh
     * @param array $data Данные по серверу из формы
     * @return string Succsess или Error
     */

    public function setServers($dbh, $data, $DataBase)
    {
        switch ($data['servergames']) {
            case '1':
                $Engine = SourceQuery :: GOLDSOURCE;
                $Engine1 = "SourceQuery :: GOLDSOURCE";
                break;
            case '2':
                $Engine = SourceQuery :: SOURCE;
                $Engine1 = "SourceQuery :: SOURCE";
        }
        $DbCheck = $dbh->prepare("
						SELECT count(1)
						  FROM " . $DataBase . ".servers ss
						 WHERE ss.ip = :ip
						   AND ss.port = :port");
        $DbCheck->bindParam(':ip', $data['serverip'], PDO::PARAM_STR);
        $DbCheck->bindParam(':port', $data['serverport'], PDO::PARAM_STR);
        $DbCheck->execute();
        $DbCheck = $DbCheck->fetch(PDO::FETCH_ASSOC);
        if ($DbCheck["count(1)"] != 0) {
            $result['error'] = true;
            $result['error_message'] = "Идиот, такой сервер уже есть!";
        } else {
            $Query = new SourceQuery();
            try {
                $Query->Connect($data['serverip'], $data['serverport'], 2, $Engine);
                $result = $Query->GetInfo();
                if (!$Query->Ping()) {
                    $result['error'] = true;
                    $result['error_message'] = "Нет ответа от сервера!";
                };
                if (RCON_VALIDATE === true) {
                    if (isset($data['serverrcon']) || $data['serverrcon'] != "") {
                        $Query->SetRconPassword($data['serverrcon']);
                        $result['rcon'] = $Query->Rcon('say hello');
                    }
                }
            } catch (Exception $e) {
                $result['error'] = true;
                $result['error_code'] = $e->getCode();
                $result['error_message'] = $e->getMessage();
            } finally {
                $Query->Disconnect();
            }
            switch ($result['error_message']) {
                case 'GetInfo: Packet header mismatch. (0x6c)':
                    $result['error'] = true;
                    $result['error_message'] = "Скорее всего, сервер забанил этот IP!";
                    break;
                case 'RCON authorization failed.':
                    $result['error'] = true;
                    $result['error_message'] = "Неправильный Rcon пароль!";
                case 'Can\'t connect to RCON server: Connection timed out':
                    $result['error'] = true;
                    $result['error_message'] = "Неправильный тип, попробуй другую игру!";
            }
            if (!$result['error']) {
                $GameId = $dbh->prepare("
									SELECT pg.id
									  FROM " . $DataBase . ".pay_games pg
									 WHERE pg.name = :name");
                $GameId->bindParam(':name', $result['ModDir'], PDO::PARAM_STR);
                $GameId->execute();
                $GameId = $GameId->fetch(PDO::FETCH_ASSOC);
                $DbInsert = $dbh->prepare("
									INSERT INTO " . $DataBase . ".servers (ip, port, rcon, type, servername, description, active, servercriteria)
										VALUES (:ip, :port, :rcon, :type, :servername, :description, 1, :servercriteria)");
                $DbInsert->bindParam(':ip', $data['serverip'], PDO::PARAM_STR);
                $DbInsert->bindParam(':port', $result['GamePort'], PDO::PARAM_STR);
                $DbInsert->bindParam(':rcon', $data['serverrcon'], PDO::PARAM_STR);
                $DbInsert->bindParam(':servercriteria', $data['servercriteria'], PDO::PARAM_STR);
                $DbInsert->bindParam(':type', $GameId['id'], PDO::PARAM_STR);
                $DbInsert->bindParam(':servername', $result['HostName'], PDO::PARAM_STR);
                $DbInsert->bindParam(':description', $data['serverdesc'], PDO::PARAM_STR);
                if ($DbInsert->execute()) {
                    $result['success'] = 'Сервер ' . $result['HostName'] . ' успешно добавлен!';
                } else {
                    $result = "bad request";
                }
            }
        }
        return json_encode($result);
    }

    /**
     * @param PDO $dbh
     * @param array $data id сервера
     * @return bool True когда успешно удален, False когда произошла ошибка при удалении
     */
    public function deleteServers($dbh, $data)
    {
        $DbCheck = $dbh->prepare("SELECT id, servername FROM " . $DataBase . ".servers WHERE id = :id");
        $DbCheck->bindParam(':id', $data['serverdel'], PDO::PARAM_INT);
        $DbCheck->execute();
        $DbCheck = $DbCheck->fetch(PDO::FETCH_ASSOC);
        if ($DbCheck) {
            $Delete = $dbh->prepare("DELETE FROM " . $DataBase . ".servers WHERE id = :id");
            $Delete->bindParam(':id', $DbCheck['id'], PDO::PARAM_INT);
            $Delete->execute();
            /*$Delete = $dbh->prepare("DELETE FROM ".$DataBase.".pay_type_servers WHERE pay_serverid = :id");
            $Delete->bindParam(':id', $DbCheck['id'], PDO::PARAM_INT);
            $Delete->execute();*/
            $result = "Сервер " . $DbCheck['servername'] . " удален!";
        } else {
            $result = "Ошибка, такого сервера не существует!";
        }
        return json_encode($result);
    }
}