<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-26 12:21:57
         compiled from ".\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69057e8d6aeed8181-96256337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc069d56d8c16fb74fb86df5836047f412e80777' => 
    array (
      0 => '.\\templates\\error.tpl',
      1 => 1474881689,
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
<?php if ($_valid && !is_callable('content_57e8d6af00b095_80368716')) {function content_57e8d6af00b095_80368716($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\\Xampp\\dev.soglasie.ru\\source\\smarty\\plugins\\modifier.debug_print_var.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="error">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['error']->value);?>
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div><?php }} ?>
