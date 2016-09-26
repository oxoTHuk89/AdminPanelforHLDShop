<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-25 16:38:19
         compiled from ".\templates\sts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2528757e7e15ba64658-81385605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1da5ef6002ac4f22771822bbdc7c34128f4e2afd' => 
    array (
      0 => '.\\templates\\sts.tpl',
      1 => 1474624972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2528757e7e15ba64658-81385605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getServers' => 0,
    'ADMIN' => 0,
    'res' => 0,
    'getServices' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e7e15bb495f1_54236215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e7e15bb495f1_54236215')) {function content_57e7e15bb495f1_54236215($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['getServers']->value['error'])) {?>
    <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['getServers']->value['error_message'];?>
</div>
<?php } else { ?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
    
    <form class="data form-horizontal  " role="form">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="pay_serverid">Сервер: </label>
            <div class="col-sm-10">
                <select id="pay_serverid" name="pay_serverid" class="form-control select">
                    <option value="">Выберите игру</option>
                    <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['ip'];?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="pay_type">Услуга: </label>
            <div class="col-sm-10">
                <select id="pay_type" name="pay_type" class="form-control select">
                    <option value="">Выберите игру</option>
                    <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="cost">Стоимость: </label>
            <div class="col-sm-10">
                <input type="number" placeholder="Цена за услугу" class="form-control" name="cost" id="cost">
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" class="submit btn btn-success" value="Добавить сервер">
        </div>
    </form>
<?php }?><?php }} ?>
