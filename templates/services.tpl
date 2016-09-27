<div id="error"></div>
{if isset($error)}
    <div class="alert alert-danger">{$error}</div>
{elseif (isset($notice))}
    <div class="alert alert-success">{$notice}</div>
{else}
    {include file="header.tpl"}

    {if isset($getServices) && !isset($getServices['error'])}
        <form class="relations">
            <table class="table">
                <tr>
                    <th class="">Услуга</th>
                    <th class="">Описание</th>
                    <th class="" colspan="2">Доступна</th>
                </tr>
                {foreach $getServices as $Services}
                    <tr>
                        <td class="">
                            {$Services.name}
                        </td>
                        <td class="">
                            {$Services.access}
                        </td>
                        <td class="">
                            {if isset($Services.active) && $Services.active == 0}
                                <h4>Не доступна из меню</h4>
                            {elseif $Services.active == 1}
                                <h4>Доступна для выбора</h4>
                            {/if}
                        </td>
                        <td class="">
                            <input id={$Services.id} type="button" data-toggle="modal" class="deleteServices btn btn-danger "
                                   value="Удалить связку">
                        </td>
                    </tr>
                {/foreach}
            </table>
        </form>
    {else}
        <div class="alert alert-danger">{$getServices['error_message']}</div>
    {/if}
    <h1>Добавить новую услугу</h1>
    <form class="data" role="form">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Название: </label>
            <div class="col-sm-10">
                <input type="text" placeholder="VIP\Админ\etc" class="form-control" name="name" id="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="access">Описание: </label>
            <div class="col-sm-10">
                <input type="text" placeholder="Флаги\Гуппы\Опыт" class="form-control" name="access" id="access">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="active">Активна: </label>
            <div class="col-sm-10">
                <input type="radio" class="form-control" name="active" id="active">
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" data-toggle="modal" class="submit_service btn btn-success"
                   value="Добавить услугу">
        </div>
    </form>
{/if}
