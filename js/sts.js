$(document).ready(function () {
//Добавляем сервак
    $(".submit").click(function () {
        var data = $(".data :input").serializeArray();
        $.ajax({
            type: "POST",
            url: "sts.php",
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
    });
    //$(".save_cost").click(function () {
    $("body").on("click", ".save_cost", function () {
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
            dataType: 'JSON',
            data: data,
            success: function (json) {
                var width = 550;
                console.log(json);
                //$("#dialog").html(json.error_message);
                console.log($("#dialog").html());
                //var name = '$("#dialog").html(result)';
                success(json, width); //Данные, которые пришли после обработки, ширина будущего диалога
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status);
                console.log(thrownError);
            }
        });
    });

    $(".delete_relations").click(function () {
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
            dataType: 'JSON',
            data: data,
            success: function (json) {
                var width = 550;
                console.log(json);
                //success(json, width, name); //Данные, которые пришли после обработки, ширина будущего диалога
                //location.reload();
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

    $(".serverdel").click(function () {
        var data = {
            'serverdel': $(this).attr("id")
        };
        $.ajax({
            type: "POST",
            url: "sts.php",
            dataType: 'JSON',
            data: data,
            success: function (json) {
                alert(json);
                location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });
});