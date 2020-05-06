$(document).ready(function() {

    $(document).on("submit", "#ouisubform", function(event) {
        event.preventDefault();
        var email=$("#ouibounce-modal-email").val();

        $.ajax({
            url: "/subscriptiononly",
            type: 'POST',
            dataType: 'json',
            data: {"email":email

            },
            async: true,
            success: function (response) {

                $("#oui-modal-error").html(response).show();
            }
        });
    });

});