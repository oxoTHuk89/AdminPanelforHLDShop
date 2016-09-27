<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-27 09:04:58
         compiled from ".\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69057e8d6aeed8181-96256337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc069d56d8c16fb74fb86df5836047f412e80777' => 
    array (
      0 => '.\\templates\\error.tpl',
      1 => 1474900804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69057e8d6aeed8181-96256337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e8d6af00b095_80368716',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8d6af00b095_80368716')) {function content_57e8d6af00b095_80368716($_smarty_tpl) {?><div id="error">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            blabla
        </div>
    <?php }?>
</div>
<?php }} ?>
