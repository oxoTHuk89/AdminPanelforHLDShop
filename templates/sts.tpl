<div id="error"></div>
{if isset($error)}
    <div class="alert alert-danger">{$error}</div>
{elseif (isset($notice))}
    <div class="alert alert-success">{$notice}</div>
{else}
    {include file="header.tpl"}
    {if $ADMIN}
        {if isset($getRelationss) && !isset($getRelationss['error'])}
            <form class="relations">
                <table class="table table-striped ">
                    <tr>
                        <th class="">Cервер:</th>
                        <th class="">Услуги</th>
                        <th class="" colspan="2">Стоимость:</th>
                    </tr>
                    {foreach $getRelationss as $Relations}
                        <tr>
                            <td class="">
                                {$Relations.HostName}
                                <input type="hidden" name="server_id" class="ServerId" value="{$Relations.ServerId}">
                            </td>
                            <td class="">
                                {$Relations.Type}
                                <input type="hidden" name="type" class="TypeId" value="{$Relations.TypeId}">
                            </td>
                            <td class="">
                                <label for="cost">
                                    <input type="text" name="cost" class="cost" value="{$Relations.cost}">
                                </label>
                            </td>

                            <td class="">
                                <input type="hidden" name="save_cost" value="1">
                                <input type="button" data-toggle="modal" class="submit btn btn-success save_cost"
                                       value="Сохранить цену">
                            </td>
                            <td class="">
                                <input type="hidden" name="delete_relations" value="1">
                                <input type="button" data-toggle="modal" class="submit btn btn-danger delete_relations"
                                       value="Удалить связку">
                            </td>
                        </tr>
                    {/foreach}
                </table>
            </form>
        {else}
            <div class="alert alert-danger">{$getRelationss['error_message']}</div>
        {/if}
        {if isset($getServers)}
            <h1>Добавить услугу на севрер</h1>
            <form class="data" role="form">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="pay_serverid">Сервер: </label>
                    <div class="col-sm-10">
                        <select id="pay_serverid" name="pay_serverid" class="form-control select">
                            <option value="">Выберите сервер</option>
                            {foreach $getServers as $res}
                                <option value="{$res.id}">{$res.HostName}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="pay_type">Услуга: </label>

                    <div class="col-sm-10">
                        <select id="pay_type" name="pay_type" class="form-control select">
                            <option value="">Выберите услугу</option>
                            {foreach $getServices as $res}
                                <option value="{$res.id}">{$res.name}</option>
                            {/foreach}
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
                    <input type="button" data-toggle="modal" class="submit btn btn-success"
                           value="Добавить услугу на сервер">
                </div>
            </form>
        {/if}
    {/if}
{/if}
