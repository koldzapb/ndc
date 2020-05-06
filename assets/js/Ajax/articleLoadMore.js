$(document).ready(function() {

    $(document).on("click", "#load_articles_button", function() {

        var button=$(this);
        var first=button.attr("first");

        $.ajax({
            url: "/morearticles",
            type: 'GET',
            dataType: 'json',
            data: {"first":first

            },
            async: true,
            success: function (response) {
                first=parseInt(first)+10;
                button.attr("first",first);
                //alert(response);
                $("#articles_holder_ajax").append(response);
                $("#articles_holder_ajax .lazyload").lazyload();
                var total=$("#articles_totalnumber").html();
                total=parseInt(total);
                if(first>=total)
                {
                    first=total;
                    $("#load_articles_button").css("display","none");
                }
                $(".page-load span").html(first);


            }
        });
    });
});
