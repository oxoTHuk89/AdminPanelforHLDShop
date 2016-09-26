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


function success(result, width, name) {
    var dialog_name = 'qwe';
    $("body").dialog({
        resizable: true,
        width: width,
        modal: true,
        hide: 'fade',
        buttons: {
            "Закрыть": function () {
                $(this).dialog("close");
                location.reload();
                //$(name).show();
            }
        }
    });
}