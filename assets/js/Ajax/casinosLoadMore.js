$(document).ready(function() {

    $(document).on("click", "#more_casinos", function() {

        var button=$(this);
        var first=button.attr("first");
        var max=button.attr("max");
        $(".spinner").show();

        $.ajax({
            url: "/morecasinos",
            type: 'GET',
            dataType: 'json',
            data: {"first":first,"max":max

            },
            async: true,
            success: function (response) {
                first=parseInt(first)+50;
                button.attr("first",first);
               $("#all_casinos").attr("first",first);

                $(".casinos-list").append(response);
                $('.casinos-list .lazyload').lazyload();
                var total=parseInt($("#totalcasinos").html());
                if(first<total) {
                    $("#current_casinos").html(first);
                }
                else{
                    $("#current_casinos").html(total);
                    $("#more_casinos").css("display","none");
                    $("#all_casinos").css("display","none");
                }
                $(".spinner").hide();

            }
        });
    });
});