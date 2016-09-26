<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-26 12:56:47
         compiled from ".\templates\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174757e8eef982bd13-59653427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595fe4f965f7f7fb4e29f4b454ba0e8117b659f9' => 
    array (
      0 => '.\\templates\\navbar.tpl',
      1 => 1474883419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174757e8eef982bd13-59653427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e8eef982bd15_06491579',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8eef982bd15_06491579')) {function content_57e8eef982bd15_06491579($_smarty_tpl) {?>
<a href="monitoring.php"><input type="button" value="Управление серверами"></a>
<a href="services.php"><input type="button" value="Управление услугами"></a>
<a href="sts.php"><input type="button" value="Добавить услугу на сервер"></a>
<a href="relations.php"><input type="button" value="Посмотреть все связи"></a><?php }} ?>
