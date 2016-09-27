<?php
/**
 * Created by PhpStorm.
 * User: sergey.burikov
 * Date: 01.09.2016
 * Time: 14:58
 */

require_once("include/connect.php");
require_once("include/ServerInfo.php");
require_once("include/Services.php");
require_once("include/ServicesToServer.php");
require_once('smarty/Smarty.class.php');
//
$getServers = new ServerInfo();
$getServers = $getServers->getServers($dbh, $DataBase);

$getGames = new ServerInfo();
$getGames = $getGames->getGames($dbh, $DataBase);

$getServices = new ServicesInfo();
$getServices = $getServices->getServices($dbh, $DataBase);

$smarty = new Smarty();
$smarty->assign('getServers', $getServers);
$smarty->assign('getGames', $getGames);
$smarty->assign('getServices', $getServices);
$smarty->assign('ADMIN', ADMIN);

if (isset($_REQUEST) && !empty($_REQUEST)) {
    $data = $_REQUEST;
    if ($data['cost'] === "false") {
        $deleteSts = new ServicesToServer();
        $deleteSts = $deleteSts->deleteRelations($dbh, $data, $DataBase);
        if (isset($deleteSts['error'])) {
            $smarty->assign('error', $deleteSts['error_message']);
        } elseif ($deleteSts['notice']) {
            $smarty->assign('notice', $deleteSts['message']);
        }
    } else {
        $setSts = new ServicesToServer();
        $setSts = $setSts->setServicesToServer($dbh, $data, $DataBase);
        if (isset($setSts['error'])) {
            $smarty->assign('error', $setSts['error_message']);
        } elseif ($setSts['notice']) {
            $smarty->assign('notice', $setSts['message']);
        }
    }
    $smarty->display('sts.tpl');
    exit();
}