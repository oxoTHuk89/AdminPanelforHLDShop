<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-26 14:50:23
         compiled from ".\templates\sts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2876357e4e7cf634138-22517858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6f889d339903bf1dbf588747a1c26fc2633483' => 
    array (
      0 => '.\\templates\\sts.tpl',
      1 => 1474890618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876357e4e7cf634138-22517858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e4e7cf67e4c6_37438062',
  'variables' => 
  array (
    'error' => 0,
    'getServers' => 0,
    'ADMIN' => 0,
    'getRelationss' => 0,
    'existing_each' => 0,
    'Relations' => 0,
    'res' => 0,
    'getServices' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e7cf67e4c6_37438062')) {function content_57e4e7cf67e4c6_37438062($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\\Xampp\\dev.soglasie.ru\\source\\smarty\\plugins\\modifier.debug_print_var.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['getServers']->value['error_message'];?>
</div>
<?php } else { ?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
    <form class="relations">
        <table class="table">
            <tr>
                <th class="">Cервер:</th>
                <th class="">Услуги</th>
                <th class="" colspan="2">Стоимость:</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['existing_each'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['existing_each']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getRelationss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['existing_each']->key => $_smarty_tpl->tpl_vars['existing_each']->value) {
$_smarty_tpl->tpl_vars['existing_each']->_loop = true;
?>
                <tr>
                    <td class="">
                        <?php echo $_smarty_tpl->tpl_vars['existing_each']->value['server_name'];?>

                        <input type="hidden" name="server_id" class="server_id" value="<?php echo $_smarty_tpl->tpl_vars['existing_each']->value['server_id'];?>
">
                    </td>
                    <td class="">
                        <?php echo $_smarty_tpl->tpl_vars['existing_each']->value['type'];?>

                        <input type="hidden" name="type" class="type" value="<?php echo $_smarty_tpl->tpl_vars['existing_each']->value['type_id'];?>
">
                    </td>
                    <td class="">
                        <label for="cost">
                            <input type="text" name="cost" class="cost" value="<?php echo $_smarty_tpl->tpl_vars['existing_each']->value['cost'];?>
">
                        </label>
                    </td>

                    <td class="">
                        <input type="hidden" name="save_cost" value="1">
                        <input type="button" class="save_cost" value="Сохранить цену">
                    </td>
                    <td class="">
                        <input type="hidden" name="delete_relations" value="1">
                        <input type="button" class="delete_relations" value="Удалить связку">
                    </td>
                </tr>
            <?php } ?>
        </table>
    </form>
    <table id="example" class="table table-bordered" cellspacing="0">
        <thead>
        <tr>
            <th>Cервер:</th>
            <th>Услуги</th>
            <th>Стоимость:</th>
            <th>Действия</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['Relations'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Relations']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getRelationss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Relations']->key => $_smarty_tpl->tpl_vars['Relations']->value) {
$_smarty_tpl->tpl_vars['Relations']->_loop = true;
?>
            <tr>
                <form class="data  " role="form">
                    <input type="hidden" class="form-control" name="serverid" id="serverid" value=<?php echo $_smarty_tpl->tpl_vars['Relations']->value['ServerId'];?>
>
                </form>
                <div class="form-group">
                    <div class="col-sm-10">

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="type" id="type" value=<?php echo $_smarty_tpl->tpl_vars['Relations']->value['Type'];?>
>
                    </div>
                </div>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['Relations']->value['HostName'];?>
</strong></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['Relations']->value['Type'];?>
</strong></td>
                <td>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cost">Стоимость: </label>
                        <div class="col-sm-10">
                            <input type="number" placeholder="Цена за услугу" class="form-control" name="cost"
                                   id="cost" value=<?php echo $_smarty_tpl->tpl_vars['Relations']->value['cost'];?>
>
                        </div>
                    </div>
                </td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['Relations']->value['TypeId'];?>
</strong></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['Relations']->value['TypeId'];?>
</strong></td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['getRelationss']->value);?>

    <form class="data form-horizontal  " role="form">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="pay_serverid">Сервер: </label>
            <div class="col-sm-10">
                <select id="pay_serverid" name="pay_serverid" class="form-control select">
                    <option value="">Выберите сервер</option>
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
                    <option value="">Выберите услугу</option>
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
            <input type="button" data-toggle="modal" class="submit btn btn-success" value="Добавить услугу на сервер">
        </div>
    </form>
<?php }?><?php }} ?>
