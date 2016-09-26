{include file="header.tpl"}
{if isset($error)}
    <div class="alert alert-warning">{$getServers.error_message}</div>
{else}

{/if}
{if $ADMIN}
    <form class="relations">
        <table class="table">
            <tr>
                <th class="">Cервер:</th>
                <th class="">Услуги</th>
                <th class="" colspan="2">Стоимость:</th>
            </tr>
            {foreach $getRelationss as $existing_each}
                <tr>
                    <td class="">
                        {$existing_each.server_name}
                        <input type="hidden" name="server_id" class="server_id" value="{$existing_each.server_id}">
                    </td>
                    <td class="">
                        {$existing_each.type}
                        <input type="hidden" name="type" class="type" value="{$existing_each.type_id}">
                    </td>
                    <td class="">
                        <label for="cost">
                            <input type="text" name="cost" class="cost" value="{$existing_each.cost}">
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
            {/foreach}
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
        {foreach $getRelationss as $Relations}
            <tr>
                <form class="data  " role="form">
                    <input type="hidden" class="form-control" name="serverid" id="serverid" value={$Relations.ServerId}>
                </form>
                <div class="form-group">
                    <div class="col-sm-10">

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="type" id="type" value={$Relations.Type}>
                    </div>
                </div>
                <td><strong>{$Relations.HostName}</strong></td>
                <td><strong>{$Relations.Type}</strong></td>
                <td>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="cost">Стоимость: </label>
                        <div class="col-sm-10">
                            <input type="number" placeholder="Цена за услугу" class="form-control" name="cost"
                                   id="cost" value={$Relations.cost}>
                        </div>
                    </div>
                </td>
                <td><strong>{$Relations.TypeId}</strong></td>
                <td><strong>{$Relations.TypeId}</strong></td>

            </tr>
        {/foreach}
        </tbody>
    </table>
    {$getRelationss|@debug_print_var}
    <form class="data form-horizontal  " role="form">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="pay_serverid">Сервер: </label>
            <div class="col-sm-10">
                <select id="pay_serverid" name="pay_serverid" class="form-control select">
                    <option value="">Выберите сервер</option>
                    {foreach $getServers as $res}
                        <option value="{$res.id}">{$res.ip}</option>
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
            <input type="button" data-toggle="modal" class="submit btn btn-success" value="Добавить услугу на сервер">
        </div>
    </form>
{/if}