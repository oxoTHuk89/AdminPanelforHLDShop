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

$getRelationss = new ServicesToServer();
$getRelationss = $getRelationss->getRelationss($dbh, $DataBase);

$smarty = new Smarty();
$smarty->assign('getServers', $getServers);
$smarty->assign('getGames', $getGames);
$smarty->assign('getServices', $getServices);
//var_dump($getRelationss);
$smarty->assign('getRelationss', $getRelationss);


if(isset($error))$smarty->assign('error', $error);
$smarty->assign('ADMIN', ADMIN);

$smarty->display('sts.tpl');
