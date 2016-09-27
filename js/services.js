$(document).ready(function () {
//ƒобавл€ем сервак
   /* $(".add_srv").click(function () {
        var data = $(".create_server :input").serializeArray();
        $.ajax({
            type: "POST",
            url: "services.php",
            dataType: 'JSON',
            data: data,
            success: function (json) {
                console.log(json);
                if (!json.error) {
                    alert(json.success);
                    location.reload();
                }
                else {
                    alert(json.error_message);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });*/
    $(".submit_service").click(function () {
        var data = $(".data :input").serializeArray();
        console.log(data);
        $.ajax({
            type: "POST",
            url: "services.php",
            data: data,
            success: function (json) {
                var width = 550;
                $("#error").html(json);
                success(json, width); //ƒанные, которые пришли после обработки, ширина будущего диалога
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });
    $(".deleteServices").click(function () {
        var data = {
            'id': $(this).attr( "id" ),
            'remove': true
        };
        $.ajax({
            type: "POST",
            url: "services.php",
            data: data,
            success: function (json) {
                var width = 550;
                $("#error").html(json);
                success(json, width); //ƒанные, которые пришли после обработки, ширина будущего диалога
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });
});