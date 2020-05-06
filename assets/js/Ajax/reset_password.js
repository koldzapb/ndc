

$(document).ready(function() {

    $(document).on("click", "#reset_password", function() {

        $.ajax({
            url: "/resetpasswordform",
            type: 'GET',
            dataType: 'json',
            data: {},
            async: true,
            success: function (response) {
                $(".reset_password_profile").html(response);
            }
        });
    });

    $(document).on("click", "#edit_reset_password", function() {

        $.ajax({
            url: "/resetpasswordform",
            type: 'GET',
            dataType: 'json',
            data: {},
            async: true,
            success: function (response) {
                $(".edit_reset_password_profile").html(response);
            }
        });
    });

    $(document).on("submit", "#reset_password_form", function(event) {
        event.preventDefault();
        var email=$("#reset_email").val();

        $.ajax({
            url: "/resetpassword",
            type: 'GET',
            dataType: 'json',
            data: { "email":email },
            async: true,
            success: function (response) {
                $("#reset_password_info").html(response);
            }
        });
    });


    $(document).on("submit", "#reset_password_landing_form", function(event) {
        event.preventDefault();
        var resetPasswordToken=$("#reset_password_confirm").attr("data-password_reset_token");
        var resetPasswordFirst=$("#reset_password_first").val();
        var resetPasswordSecond=$("#reset_password_second").val();

        $.ajax({
            url: "/resetpasswordfinal",
            type: 'POST',
            dataType: 'json',
            data: { "resetPasswordToken":resetPasswordToken,"resetPasswordFirst":resetPasswordFirst,"resetPasswordSecond":resetPasswordSecond },
            async: true,
            success: function (response) {
                $("#reset_password_info").html(response);
            }
        });
    });


});

