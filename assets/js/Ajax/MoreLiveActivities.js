$(document).ready(function() {

    $(document).on("click", ".homepage-activities #more_activities", function() {

        var button=$(this);
        var first=parseInt(button.attr("data-first"));

        $.ajax({
            url: "/moreliveactivities",
            type: 'GET',
            dataType: 'json',
            data: {"first":first

            },
            async: true,
            success: function (response) {

                $("#ndc_live_activities").append(response);
                $("#ndc_live_activities .lazyload").lazyload();
                button.attr('data-first',first+7);
            }
        });
    });
});




