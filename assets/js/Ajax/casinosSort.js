$(document).ready(function() {

    $(document).on("click", "#cas_sort a", function() {

        $(".spinner ").show();
        var sortType=$(this).attr("data-sorttype");
        var sortText=$(this).attr("data-text");
        var numberOfCasinosToReturn=$("#current_casinos").html();
        numberOfCasinosToReturn=parseInt(numberOfCasinosToReturn);
        $.ajax({
            url: "/sortedcasinos",
            type: 'GET',
            dataType: 'json',
            data: {"number":numberOfCasinosToReturn,"sorttype":sortType

            },
            async: true,
            success: function (response) {
                $(".casinos-list").html(response);
                $('.casinos-list .lazyload').lazyload();
                $("#dropdownFilter").html(sortText);
                $(".spinner ").hide();

            }
        });
    });

});