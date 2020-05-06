$(document).ready(function() {
    $(document).on("click", "[data-usertobeliked]", function() {

        var userid=$(this).attr("data-usertobeliked");

        $.ajax({
            url: "/usertouserlike",
            type: 'POST',
            dataType: 'json',
            data: {"id":userid

            },
            async: true,
            success: function (response,xhr,textStatus) {
                $("#alert").html(response);
                document.getElementById('welcomeDiv').style.display = "block";
                $( "#welcomeDiv" ).fadeOut( 2000, function() {});

            }
        });
    });

});