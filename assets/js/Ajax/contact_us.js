

$(document).ready(function() {
    $(document).on("click", "#contact", function() {

        var contactname=$("#contactname").val();
        var contactemail=$("#contactemail").val();
        var content=$("#contactcontent").val();

        $.ajax({
            url: "/contactuscontent",
            type: 'POST',
            dataType: 'json',
            data: {"name":contactname,"email":contactemail,"content":content

            },
            async: true,
            success: function (response) {

                $("#contact-error").fadeOut();
                $("#contactresponse").html(response).append('<div class="tclose"></div>').fadeIn();

            },
            error:function (response) {
                $("#contact-error").html("Email is invalid or some fields are empty.")
                $("#contact-error").fadeIn();
            }
        });
    });

    $(document).on("click", "#contactresponse .tclose", function() {
        $("#contactresponse").fadeOut();
        $(".contact-form-field").val('');
    });

});

