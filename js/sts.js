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