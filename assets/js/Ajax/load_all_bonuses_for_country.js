$(document).ready(function() {

    $(document).on("click", "#all_bonuses_for_country", function() {

        var button=$(this);
        var first=button.attr("first");
        var max=button.attr("max");
        var countryname=$(this).attr("data-country");
        var sort=$("#dropdownFilter").attr("data-sorttype");
        $(".spinner").css("display","block");

        $.ajax({
            url: "/bonusrendering",
            type: 'GET',
            dataType: 'json',
            data: {"first":first,"max":max,"countryname":countryname,"sorttype":sort,"type":"country"

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
                $("#all_bonuses_for_country").css("display","none");
                $("#more_bonuses_for_country").css("display","none");
                $(".spinner").css("display","none");
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