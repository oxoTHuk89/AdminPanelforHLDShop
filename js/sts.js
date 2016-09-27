$(document).ready(function () {
//Добавляем сервак
    $(".submit").click(function () {
        var data = $(".data :input").serializeArray();
        $.ajax({
            type: "POST",
            url: "sts.php",
            data: data,
            success: function (json) {
                var width = 550;
                $("#error").html(json);
                success(json, width); //Данные, которые пришли после обработки, ширина будущего диалога
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });
    $(".save_cost").click(function () {
        var pay_serverid = $(this).parent().parent().find(".ServerId").val();
        var pay_type = $(this).parent().parent().find(".TypeId").val();
        var cost = $(this).parent().parent().find(".cost").val();
        var data = {
            'pay_serverid': pay_serverid,
            'pay_type': pay_type,
            'cost': cost
        };
        $.ajax({
            type: "POST",
            url: "sts.php",
            data: data,
            success: function (json) {
                var width = 550;
                $("#error").html(json);
                success(json, width); //Данные, которые пришли после обработки, ширина будущего диалога
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });

    $(".delete_relations").click(function () {
        var pay_serverid = $(this).parent().parent().find(".ServerId").val();
        var pay_type = $(".delete_relations").parent().parent().find(".TypeId").val();
        var cost = false;
        var data = {
            'pay_serverid': pay_serverid,
            'pay_type': pay_type,
            'cost': cost
        };
        $.ajax({
            type: "POST",
            url: "sts.php",
            data: data,
            success: function (json) {
                var width = 550;
                $("#error").html(json);
                success(json, width); //Данные, которые пришли после обработки, ширина будущего диалога
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status);
                console.log(thrownError);
            },
            complete: function () {
                $(".relations").show();
            }
        });
    });
});