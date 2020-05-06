$(document).ready(function() {

    $(document).on("click", "[data-bonus]", function() {

        var bonusId=$(this).attr("data-bonus");


        $.ajax({
            url: "/bonuslike",
            type: 'GET',
            dataType: 'json',
            data: {"bonusId":bonusId

            },
            async: true,
            success: function (like) {

                $("#alert").html(like);
                document.getElementById('welcomeDiv').style.display = "block";
                $( "#welcomeDiv" ).fadeOut( 2000, function() {});

            }
        });
    });

});