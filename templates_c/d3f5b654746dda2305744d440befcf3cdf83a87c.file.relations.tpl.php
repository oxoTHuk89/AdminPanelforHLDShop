<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-26 12:56:55
         compiled from ".\templates\relations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2876957e8f0e7e95881-23236144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f5b654746dda2305744d440befcf3cdf83a87c' => 
    array (
      0 => '.\\templates\\relations.tpl',
      1 => 1474883799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876957e8f0e7e95881-23236144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getServers' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e8f0e7ed4094_56072919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8f0e7ed4094_56072919')) {function content_57e8f0e7ed4094_56072919($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['ip'];?>
</option>
<?php } ?>
<?php }} ?>
