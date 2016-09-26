{include file='header.tpl'}
<div id="error">
    {if isset($error)}
        <div class="alert alert-danger">
            {$error}
        </div>
    {/if}
</div>
