<?php
/**
 * Created by PhpStorm.
 * User: sergey.burikov
 * Date: 01.09.2016
 * Time: 14:58
 */

require_once("include/connect.php");
require_once("include/Services.php");
require_once('smarty/Smarty.class.php');
//
$getServices = new ServicesInfo();
$getServices = $getServices->getServices($dbh, $DataBase);
var_dump($getServices);
$getGames = new ServicesInfo();
$getGames = $getGames->getServices($dbh, $DataBase);

if(ADMIN){
	if(isset($_POST['add_srv'])){
		$setServers = new Services();
		$setServers = $setServers->setServers($dbh, $_POST, $DataBase);
		echo $setServers;
		exit();
	}
	if(isset($_POST['serverdel'])){
		$deleteServers = new Services();
		$deleteServers = $deleteServers->deleteServers($dbh, $_POST);
		echo $deleteServers;
		exit();
	}
}

$smarty = new Smarty();

$chmod = (int)substr(sprintf('%o', fileperms($smarty->getCompileDir())), -4);
if($chmod != 777){
	die('Нет парв на запись в папку '.$smarty->getCompileDir());
}
$smarty->assign('getServices', $getServices);
/*$smarty->assign('getGames', $getGames);
$smarty->assign('ADMIN', ADMIN);*/
$smarty->display('services.tpl');

