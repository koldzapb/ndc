$(document).ready(function() {

    $(document).on("click", "#more_activities_cas", function() {

        var button=$(this);

        var casinoId=button.attr("data-casinoid");
        var total=parseInt(button.attr("data-total"));
        var first=parseInt(button.attr("data-first"));

        $.ajax({
            url: "/moreliveactivitiesrewcas",
            type: 'GET',
            dataType: 'json',
            data: {"casinoid":casinoId,"first":first

            },
            async: true,
            success: function (response) {

                $(".review-comments").append(response);
                $(".review-comments .lazyload").lazyload();
                button.attr('data-first',first+10);
                if((first+10)>=total) button.parent().hide();
            }
        });
    });
});




