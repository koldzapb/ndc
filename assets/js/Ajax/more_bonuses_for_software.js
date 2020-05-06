$(document).ready(function() {

    $(document).on("click", "#more_bonuses_for_software", function() {

        var button=$(this);
        var first=button.attr("first");
        var max=button.attr("max");
        var software=$(this).attr("data-software");
        var countryname=$(this).attr("data-country");
        var sorttype=$("#dropdownFilter").attr("data-sorttype");


        $(".spinner").show();

        $.ajax({
            url: "/bonusrendering",
            type: 'GET',
            dataType: 'json',
            data: {"first":first,"max":max,"countryname":countryname,"software":software,"sorttype":sorttype,"type":"software"

            },
            async: true,
            success: function (response) {
                first=parseInt(first)+50;
                button.attr("first",first);
                $("#all_bonuses_for_software").attr("first",first);

                $(".casinos-list").append(response);
                $('.casinos-list .lazyload').lazyload();
                var total=parseInt($("#totalcasinos").html());
                if(first<total) {
                    $("#current_casinos").html(first);
                }
                else{
                    $("#current_casinos").html(total);
                    $("#all_bonuses_for_software").css("display","none");
                    $("#more_bonuses_for_software").css("display","none");
                }
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