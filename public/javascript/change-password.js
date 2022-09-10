$(document).ready(function() {
    $(".card-body").on("submit", "#form-change-password", function(event) {
        event.preventDefault();
        let baesurl = document.getElementById("baesurl").value;
        $("#submit-change-password").attr("disabled", true);
        $.ajax({
            url: baesurl + '/auth/changePassword',
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $("#submit-change-password").attr("disabled", true);
                $("#form-change-password").css("opacity", ".5");
            },
            success: function(data) {
                if (data == 'success') {
                    alert(
                        "Password changed successfully\r\nPlease login again.\r\n");
                    $("#form-change-password")[0].reset();
                    $("#form-change-password").css("opacity", "");
                    $("#submit-change-password").removeAttr("disabled")
                    $("#modal-change-password").modal("hide");
                    window.location.assign(baesurl + '/welcome?logged=false');
                } else {
                    alert(data)
                    $("#form-change-password").css("opacity", "");
                    $("#submit-change-password").removeAttr("disabled")
                }
            },
            error: function(jqXHR, textStatus, errorMessage, errorThrown) {
                $("#form-change-password").css("opacity", "");
                $("#submit-change-password").removeAttr("disabled")
                alert(jqXHR + "\n" + textStatus + "\n" + errorMessage + "\n" +
                    errorThrown);
            },
        })

    });

});
