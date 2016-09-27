<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-27 00:23:25
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1855457ded1dfeff7e9-19568086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81ffffc430357439a4a925315bb1bec58175346a' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1474883315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855457ded1dfeff7e9-19568086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57ded1e01a2284_59337117',
  'variables' => 
  array (
    'ADMIN' => 0,
    'getServers' => 0,
    'Server' => 0,
    'color' => 0,
    'colspan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ded1e01a2284_59337117')) {function content_57ded1e01a2284_59337117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<table class='table table-bordered'>
    <tr class="center" style="    background-color: #6b6a6a;" id="">
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
				<?php }?>
            </tr>
        <?php }?>
    <?php } ?>
</table>
<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>

<?php }?>


<?php }} ?>
