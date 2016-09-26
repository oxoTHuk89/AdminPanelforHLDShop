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

if(isset($_REQUEST) && !empty($_REQUEST)){
    $data = $_REQUEST;
    $setSts = new ServicesToServer();
    $setSts = $setSts->setServicesToServer($dbh, $data, $DataBase);
    echo $setSts;
    if(isset($setSts['error'])){
        //$smarty->assign('error', $setSts);
        //$smarty->display('error.tpl');
    }
    else{
       // $smarty->assign('sucsess', $setSts['sucsess']);
       // $smarty->display('sts.tpl');
    }
    exit();
}

if(ADMIN){
    if(isset($_POST['add_srv'])){
        $setServers = new ServerInfo();
        $setServers = $setServers->setServers($dbh, $_POST, $DataBase);
        echo $setServers;
        exit();
    }
    if(isset($_POST['serverdel'])){
        $deleteServers = new ServerInfo();
        $deleteServers = $deleteServers->deleteServers($dbh, $_POST);
        echo $deleteServers;
        exit();
    }
}



$smarty->display('sts.tpl');



