{include file="header.tpl"}
<a href="services.php">Добавить новую услугу</a>
{if isset($getServices.error)}
	<div class="alert alert-warning">{$getServices.error_message}</div>
{else}
<table class='table table-bordered'>
    <tr class="center" style="    background-color: #6b6a6a;" id="">
        <th>Услуга</th>
        <th>Описание</th>
        <th>Доступна</th>
    </tr>
{foreach $getServices as $Services}
	 <tr class="success hovered" id="" title="{$Server.description}">
                <td><span>{$Services.name}</span></td>
                <td><span>{$Services.access}</span></td>
                <td><span>{$Services.active}</span></td>
    
{/foreach}
{/if}