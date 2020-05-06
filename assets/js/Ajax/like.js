

$(document).ready(function() {



    $(document).on("click", "[data-casino]", function() {

        var casinoId=$(this).attr("data-casino");


        $.ajax({
            url: "/like",
            type: 'GET',
            dataType: 'json',
            data: {"casinoId":casinoId

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

