<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-21 15:41:25
         compiled from "./templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74929503957e27d8510da16-93614242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42db18e6581bfe0fcb9ca3bc4dfbf975cb4d1346' => 
    array (
      0 => './templates/navbar.tpl',
      1 => 1474461974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74929503957e27d8510da16-93614242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e27d85113d54_96465652',
  'variables' => 
  array (
    'member_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e27d85113d54_96465652')) {function content_57e27d85113d54_96465652($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['member_id']->value)) {?>
	
<?php }?>
<div id="menu_div">
<ul id="menu">
	<li class="ava">
		
		<div class="ava">
			<a href="http://g-nation.ru/index.php?/user/2-oxothuk/">
				<img src="http://g-nation.ru/uploads/profile/photo-2.png?_r=0" alt="Фотография oxoTHuk" class="user_photo">
			</a>
		</div>
		
	</li>
	<li><a href="http://g-nation.ru/index.php">Главная</a></li>
	
	<li><a href="http://g-nation.ru/index.php?/members/">Юзеры</a></li>
		
    <li>
        <a href="#">Демо</a>
        <ul>
            <li><a href="http://g-nation.ru/index.php?/page/demo.html"><span class="hover">Beta House</span></a></li>
            <li><a href="https://www.myarena.ru/hltvdemos.php?home=481"><span class="hover">GunGame</span></a></li>
<li><a href="http://godemo.g-nation.ru"><span class="hover">CS:GO</span></a></li>
        </ul>
    </li>
<li><a href="#">Админы</a>
        <ul>
            <li><a href="http://g-nation.ru/index.php?/page/cstrikeadmins.html"><span class="hover">CS 1.6</span></a></li>
            <li>
                <a href="http://g-nation.ru/index.php?/page/goadmins.html">
                <span class="hover">CS:GO</span>
                </a>
            </li>
        </ul>
    </li>
    <li><a href="#">Баны</a>
        <ul>
            <li><a href="http://g-nation.ru/index.php?/page/bans.html"><span class="hover">CS 1.6</span></a></li>
            <li>
                <a href="http://gobans.g-nation.ru/index.php?mid=2&amp;g_access_cp==1">
                <span class="hover">CS:GO</span>
                </a>
            </li>
        </ul>
    </li>
    <li><a href="#">Скачать</a>
		<ul>
				<li><a href="http://g-nation.ru/index.php?/files/file/8-counter-strike-16-by-game-nation-4554/"><span class="hover">Версия (4554)</span></a></li>
				<li><a href="http://g-nation.ru/index.php?/files/file/1-counter-strike-16-by-game-nation/"><span class="hover">Версия (6153)</span></a>
				</li>
		</ul>
	</li>
    <li><a href="http://g-nation.ru/shop">Магазин</a></li>
	<li><a href="#">Статистика</a>
		<ul>
				<li><a href="http://g-nation.ru/index.php?/page/gostats.html"><span class="hover">CS:GO</span></a></li>
				<li><a href="http://g-nation.ru/index.php?/page/ggstats.html"><span class="hover">GunGame</span></a></li>
		</ul>
	</li>
	<div style="float: right;">
	<li id="ls">
<a data-clicklaunch="getInboxList" id="inbox_link" href="http://g-nation.ru/index.php?app=members&amp;module=messaging" title="Личные сообщения"><img src="http://g-nation.ru/public/style_images/master/clear.gif" alt="">&nbsp;</a>

<a data-clicklaunch="getNotificationsList" id="notify_link" href="http://g-nation.ru/index.php?app=core&amp;module=usercp&amp;area=notificationlog" title="Уведомления"><img src="http://g-nation.ru/public/style_images/master/clear.gif" alt="">&nbsp;</a>
</li>
	<li id="logout">
		<a href="http://g-nation.ru/index.php?app=core&amp;module=global&amp;section=login&amp;do=logout&amp;k=f19081d155b9793b9712fe34168bb62a">
		<img src="http://g-nation.ru/public/style_images/master/_custom/power-off.png" style="margin: 4px -16px 1px 15px;">
		</a>
	</li>
	</div>
	
</ul>


<!---

	<div id="shoutbox-tab-count-wrap"><span id="shoutbox-tab-count" class="ipsHasNotifications" style="display: none;">1</span></div>
	<?php echo '<script'; ?>
 type="text/javascript">
		document.observe("dom:loaded", function(){
			var _thisHtml	= $('nav_app_shoutbox').innerHTML;
			_thisHtml = _thisHtml.replace( /\<\/a\>/ig, '' ) + $('shoutbox-tab-count-wrap').innerHTML + "</a>";
			$('nav_app_shoutbox').update( _thisHtml );
			$('shoutbox-tab-count-wrap').remove();
			$('shoutbox-tab-count').show();
		});
	<?php echo '</script'; ?>
>

		<li>
		<a href="http://g-nation.ru/admin/index.php" title='Перейти в панель администрирования системы' target="_blank">
		<img src="http://g-nation.ru/public/style_images/master/adm.png"/>
		</a>
		</li>
	
	<li>
		<a href="http://g-nation.ru/index.php?app=core&amp;module=modcp" title='Манель Модератора'> <img src="http://g-nation.ru/public/style_images/master/mod.png"/></a>
	</li>
	
--->
</div><?php }} ?>
