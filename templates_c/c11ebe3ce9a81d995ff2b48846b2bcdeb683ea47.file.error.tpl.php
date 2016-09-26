<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-21 16:58:38
         compiled from "./templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9600037857e28de0c669b7-56213762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11ebe3ce9a81d995ff2b48846b2bcdeb683ea47' => 
    array (
      0 => './templates/error.tpl',
      1 => 1474465800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9600037857e28de0c669b7-56213762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e28de0c6e7f5_49153513',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e28de0c6e7f5_49153513')) {function content_57e28de0c6e7f5_49153513($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="error">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>
</div><?php }} ?>
