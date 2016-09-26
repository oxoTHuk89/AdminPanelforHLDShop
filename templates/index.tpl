{include file='header.tpl'}


<table class='table table-bordered'>
    <tr class="center" style="    background-color: #6b6a6a;" id="">
        <th>Статус</th>
        <th>Название</th>
        <th>Игра</th>
        <th>Подключиться</th>
        <th>Карта</th>
        <th>Игроки</th>
		{if $ADMIN}
			<th>Удалить</th>
		{/if}
    </tr>
    {foreach $getServers as $Server}
        {if !$Server.Status}
            {$Server.Status = Offline}
            {$color = red}
            {$colspan = 5}
            <tr class="danger" id="">
                <td><span class={$color}>{$Server.Status}</span></td>
                <td colspan= {$colspan}>{$Server.ip}</td>
				{if $ADMIN}
					<td class="center"><input id={$Server.id} type="button" class="btn btn-primary	 serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				{/if}
            </tr>
        {else}
            {$Server.Status = Online}
            {$color = green}
            {$colspan = 0}
            <tr class="success hovered" id="" title="{$Server.description}">
                <td colspan= {$colspan}><span class={$color}>{$Server.Status}</span></td>
                <td><strong>{$Server.HostName}</strong></td>
                <td class="center"><img src="img/{$Server.ModDir}.png"></td>
                <td class="center"><a href=steam://connect/{$Server.ip}:{$Server.GamePort}>{$Server.ip}{if $Server.GamePort != 27015}:{$Server.GamePort}{/if}</a></td>
                <td class="center">{$Server.Map} </td>
                <td class="center">{$Server.Players} из {$Server.MaxPlayers} </td>
				{if $ADMIN}
					<td class="center"><input id={$Server.id} type="button" class="btn btn-primary serverdel" name="serverdel"
							   value="Удалить">
						<input type="hidden" class="button serverdel" name="" value=>

					</td>
				{/if}
            </tr>
        {/if}
    {/foreach}
</table>
{if $ADMIN}

{/if}


