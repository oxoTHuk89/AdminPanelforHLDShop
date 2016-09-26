<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-21 16:16:24
         compiled from "./templates/services.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54503927257e28828765812-41040447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f37109140ee565978b0d5bf88fea935cca08aba' => 
    array (
      0 => './templates/services.tpl',
      1 => 1473999271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54503927257e28828765812-41040447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getServices' => 0,
    'Server' => 0,
    'Services' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e2882878b476_31444454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2882878b476_31444454')) {function content_57e2882878b476_31444454($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<a href="services.php">Добавить новую услугу</a>
<?php if (isset($_smarty_tpl->tpl_vars['getServices']->value['error'])) {?>
	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['getServices']->value['error_message'];?>
</div>
<?php } else { ?>
<table class='table table-bordered'>
    <tr class="center" style="    background-color: #6b6a6a;" id="">
        <th>Услуга</th>
        <th>Описание</th>
        <th>Доступна</th>
    </tr>
<?php  $_smarty_tpl->tpl_vars['Services'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Services']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Services']->key => $_smarty_tpl->tpl_vars['Services']->value) {
$_smarty_tpl->tpl_vars['Services']->_loop = true;
?>
	 <tr class="success hovered" id="" title="<?php echo $_smarty_tpl->tpl_vars['Server']->value['description'];?>
">
                <td><span><?php echo $_smarty_tpl->tpl_vars['Services']->value['name'];?>
</span></td>
                <td><span><?php echo $_smarty_tpl->tpl_vars['Services']->value['access'];?>
</span></td>
                <td><span><?php echo $_smarty_tpl->tpl_vars['Services']->value['active'];?>
</span></td>
    
<?php } ?>
<?php }?><?php }} ?>
