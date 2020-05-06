$(document).ready(function() {

    $(document).on("click", "#all_casinos", function() {

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
                button.attr("first",max);
                $("#more_casinos").attr("first",max);

                $(".casinos-list").append(response);
                $('.casinos-list .lazyload').lazyload();
                var total=$("#totalcasinos").html();
                $(".page-load span").html(total);
                $(".spinner").hide();
                $("#more_casinos").css("display","none");
                $("#all_casinos").css("display","none");

            }
        });
    });
});