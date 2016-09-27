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
$smarty = new Smarty();

$chmod = (int)substr(sprintf('%o', fileperms($smarty->getCompileDir())), -4);

$smarty->assign('getServices', $getServices);

if (isset($_REQUEST) && !empty($_REQUEST)) {
    $data = $_REQUEST;
    if ($data['remove'] === "true") {
        $deleteSts = new ServicesInfo();
        $deleteSts = $deleteSts->deleteServices($dbh, $data, $DataBase);
        if (isset($deleteSts['error'])) {
            $smarty->assign('error', $deleteSts['error_message']);
        } elseif ($deleteSts['notice']) {
            $smarty->assign('notice', $deleteSts['message']);
        }
    } else {
        $setSts = new ServicesInfo();
        $setSts = $setSts->setServices($dbh, $data, $DataBase);
        if (isset($setSts['error'])) {
            $smarty->assign('error', $setSts['error_message']);
        } elseif ($setSts['notice']) {
            $smarty->assign('notice', $setSts['message']);
        }
    }
    $smarty->display('services.tpl');
    exit();
}else{
    $smarty->display('services.tpl');
}

