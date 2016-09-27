function showDailog(width, name) {
    //var title_dialog = $(name).find("#title").val();
    console.log(name);
    $(name).dialog({
        resizable: true,
        width: width,
        title: 'title_dialog',
        modal: true,
        buttons: {
            Отмена: function () {
                $(this).dialog("close");
            }
        }
    });
}
//Функция вызова диалога при любом разкладе после аякса. JSON off =(
function success(result, width) {
    $("#error").dialog({
        resizable: true,
        width: width,
        modal: true,
        hide: 'fade',
        buttons: {
            "Закрыть": function () {
                $(this).dialog("close");
                location.reload();
            }
        }
    });
}