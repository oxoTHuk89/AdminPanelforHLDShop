<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-27 01:58:39
         compiled from ".\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:773357e9b37c72aa48-34356234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b35e6b0caa3596928751fbb69240bb793691689' => 
    array (
      0 => '.\\templates\\error.tpl',
      1 => 1474934313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773357e9b37c72aa48-34356234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e9b37c7782c8_91242608',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9b37c7782c8_91242608')) {function content_57e9b37c7782c8_91242608($_smarty_tpl) {?><div id="error">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            blabla
        </div>
    <?php }?>
</div>
<?php }} ?>
