$(document).ready(function() {

    $(document).on("click", "#bonuses_sort_software a", function() {

        $(".spinner").show();
        var filterButton=$("#dropdownFilter");
        var sortType=$(this).attr("data-sorttype");
        var sortText=$(this).attr("data-text");
        filterButton.html(sortText);
        filterButton.attr("data-sorttype",sortType);
        var numberOfCasinosToReturn=$("#current_casinos").html();
        var countryname=$(this).parent().attr("data-country");
        var software=$(this).parent().attr("data-software");
        numberOfCasinosToReturn=parseInt(numberOfCasinosToReturn);
        $.ajax({
            url: "/bonusrendering",
            type: 'GET',
            dataType: 'json',
            data: {"min":0,"max":numberOfCasinosToReturn,"sorttype":sortType,"countryname":countryname,"software":software,"type":"software"

            },
            async: true,
            success: function (response) {
                $(".casinos-list").html(response);
                $('.casinos-list .lazyload').lazyload();
                $("#dropdownFilter").html(sortText);
                $(".spinner").hide();
                $(function () {
                    $(".tooltip-btn").tooltip();
                    $('.copy-code').each(function(){
                        var code = $(this);
                        code.on('click', function(event){
                            $('#copyText').val($.trim(code.text())).select();
                            document.execCommand("copy");
                            code.tooltip('show');
                            $(".tooltip-hover").tooltip('hide');
                            setTimeout(function() {
                                code.tooltip('hide');
                            }, 1000)
                        });
                    });
                });
                $( ".more-softwares" ).each(function(){
                    $( this ).hover(
                      function() {
                        $( this ).find('.softwares_hover').show();
                        $(".softwares_hover img.lazyload").lazyload();
                      }, function() {
                        $( this ).find('.softwares_hover').hide();
                      }
                    );
                });

            }
        });
    });

});