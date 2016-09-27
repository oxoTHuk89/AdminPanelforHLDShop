<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-27 16:28:32
         compiled from "./templates/monitoring.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61879960357e271b46358f8-40287566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34342922afd7cf035dcae228df5e82976a424167' => 
    array (
      0 => './templates/monitoring.tpl',
      1 => 1474983314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61879960357e271b46358f8-40287566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e271b46c80d8_59400618',
  'variables' => 
  array (
    'getServers' => 0,
    'ADMIN' => 0,
    'Server' => 0,
    'color' => 0,
    'colspan' => 0,
    'getGames' => 0,
    'game' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e271b46c80d8_59400618')) {function content_57e271b46c80d8_59400618($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['getServers']->value['error'])) {?>
	<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['getServers']->value['error_message'];?>
</div>
<?php } else { ?>
<table class='table table-bordered'>
    <tr class="center">
        <th>Статус</th>
        <th>Название</th>
        <th>Игра</th>
        <th>Подключиться</th>
        <th>Карта</th>
        <th>Игроки</th>
		<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
			<th>Удалить</th>
		<?php }?>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['Server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Server']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Server']->key => $_smarty_tpl->tpl_vars['Server']->value) {
$_smarty_tpl->tpl_vars['Server']->_loop = true;
?>
        <?php if (!$_smarty_tpl->tpl_vars['Server']->value['Status']) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('Server', null, 0);
$_smarty_tpl->tpl_vars['Server']->value['Status'] = 'Offline';?>
            <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('red', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(5, null, 0);?>
            <tr class="danger" id="">
                <td><span class=<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['Status'];?>
</span></td>
                <td colspan= <?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<td class="center"><input id=<?php echo $_smarty_tpl->tpl_vars['Server']->value['id'];?>
 type="button" class="btn btn-primary	 serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				<?php }?>
            </tr>
        <?php } else { ?>
            <?php $_smarty_tpl->createLocalArrayVariable('Server', null, 0);
$_smarty_tpl->tpl_vars['Server']->value['Status'] = 'Online';?>
            <?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable('green', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(0, null, 0);?>
            <tr class="success hovered" id="" title="<?php echo $_smarty_tpl->tpl_vars['Server']->value['description'];?>
">
                <td colspan= <?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
><span class=<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['Status'];?>
</span></td>
                <td><strong><?php echo $_smarty_tpl->tpl_vars['Server']->value['HostName'];?>
</strong></td>
                <td class="center"><img src="img/<?php echo $_smarty_tpl->tpl_vars['Server']->value['ModDir'];?>
.png"></td>
                <td class="center"><a href=steam://connect/<?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['Server']->value['GamePort'];?>
><?php echo $_smarty_tpl->tpl_vars['Server']->value['ip'];
if ($_smarty_tpl->tpl_vars['Server']->value['GamePort']!=27015) {?>:<?php echo $_smarty_tpl->tpl_vars['Server']->value['GamePort'];
}?></a></td>
                <td class="center"><?php echo $_smarty_tpl->tpl_vars['Server']->value['Map'];?>
 </td>
                <td class="center"><?php echo $_smarty_tpl->tpl_vars['Server']->value['Players'];?>
 из <?php echo $_smarty_tpl->tpl_vars['Server']->value['MaxPlayers'];?>
 </td>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<td class="center"><input id=<?php echo $_smarty_tpl->tpl_vars['Server']->value['id'];?>
 type="button" class="btn btn-primary serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				<?php }?> 19228474
            </tr>
        <?php }?>
    <?php } ?>
</table>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
	<form class="create_server form-horizontal  " role="form">
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverip">IP адрес или домен: </label>
			<div class="col-sm-10">
				<input type="text" placeholder="123.123.123.1" class="form-control" name="serverip" id="serverip">
			</div>
		</div>	
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverport">Порт: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="serverport" id="serverport" value="27015">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="servergame">Игра: </label>
			<div class="col-sm-10">
				<select id="servergames" name="servergames" class="form-control select">
					<option value="">Выберите игру</option>
					<?php  $_smarty_tpl->tpl_vars['game'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['game']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getGames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['game']->key => $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['fullname'];?>
</option>
					<?php } ?>
				</select>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverrcon">RCON пароль: </label>
			<div class="col-sm-10">
				<input type="text" placeholder="Type rcon_password to the server console" class="form-control" name="serverrcon" id="serverrcon">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="servercriteria">Порядковый номер: </label>
			<div class="col-sm-10">
				<input type="number" placeholder="Порядок вывода. Только цифры." class="form-control" name="servercriteria" id="servercriteria">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="serverdesc">Описание: </label>
			<div class="col-sm-10">
				<textarea name="serverdesc" placeholder="Описание сервера." class="form-control" id="serverdesc"> </textarea>
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
			<input type="hidden" name="add_srv" value="1">
			<input type="button" class="add_srv btn btn-success" value="Добавить сервер">
		</div>
	</form>
<?php }?><?php }} ?>
