$(document).ready(function() {

    $(document).on("click", "#all_activities_cas", function() {

        var button=$("#more_activities_cas");
        var casinoId=button.attr("data-casinoid");
        var total=button.attr("data-total");
        var first=button.attr("data-first");

        $.ajax({
            url: "/moreliveactivitiesrewcas",
            type: 'GET',
            dataType: 'json',
            data: {"casinoid":casinoId,"total":total,"first":first

            },
            async: true,
            success: function (response) {

                $(".review-comments").append(response);
                $(".review-comments .lazyload").lazyload();
                button.parent().hide();


            }
        });
    });
});




