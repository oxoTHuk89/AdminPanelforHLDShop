<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-21 23:41:35
         compiled from ".\templates\services.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1256757e2f91c6d5cd4-79489969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da5e17cb09f24623d222b549c7da5a5988773668' => 
    array (
      0 => '.\\templates\\services.tpl',
      1 => 1474494091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1256757e2f91c6d5cd4-79489969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e2f91c7665c9_71822041',
  'variables' => 
  array (
    'getServices' => 0,
    'Services' => 0,
    'ADMIN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e2f91c7665c9_71822041')) {function content_57e2f91c7665c9_71822041($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
            <tr class="success hovered" id="" title="">
                <td><span><?php echo $_smarty_tpl->tpl_vars['Services']->value['name'];?>
</span></td>
                <td><span><?php echo $_smarty_tpl->tpl_vars['Services']->value['access'];?>
</span></td>
                <td><span><?php echo $_smarty_tpl->tpl_vars['Services']->value['active'];?>
</span></td>
            </tr>
        <?php } ?>
    </table>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
    <form class="create_service form-horizontal  " role="form">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Название: </label>

            <div class="col-sm-10">
                <input type="text" placeholder="VIP" class="form-control" name="name" id="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="access">Флаги: </label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="serverport" id="access" value="27015">
            </div>
        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <input type="hidden" name="service" value="1">
            <input type="button" class="add_service btn btn-success" value="Добавить">
        </div>
    </form>
<?php }?><?php }} ?>
