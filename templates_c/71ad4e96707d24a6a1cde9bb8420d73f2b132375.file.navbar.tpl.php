<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-27 00:23:25
         compiled from ".\templates\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:663157e99fdd343237-93068323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71ad4e96707d24a6a1cde9bb8420d73f2b132375' => 
    array (
      0 => '.\\templates\\navbar.tpl',
      1 => 1474883419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '663157e99fdd343237-93068323',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e99fdd3453f7_45806165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e99fdd3453f7_45806165')) {function content_57e99fdd3453f7_45806165($_smarty_tpl) {?>
<a href="monitoring.php"><input type="button" value="Управление серверами"></a>
<a href="services.php"><input type="button" value="Управление услугами"></a>
<a href="sts.php"><input type="button" value="Добавить услугу на сервер"></a>
<a href="relations.php"><input type="button" value="Посмотреть все связи"></a><?php }} ?>
