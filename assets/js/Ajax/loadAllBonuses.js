$(document).ready(function() {

    $(document).on("click", ".homepage-casino-list #all_bonuses", function() {

        var button=$(this);
        var button1=$("#more_bonuses");
        var first=button.attr("first");
        var max=button.attr("max");
        var bonustype=$(this).attr("bonustype");
        var sort=$("#dropdownFilter").attr("data-sorttype");
        $("#bottom_spinner").css("display","block");


        $.ajax({
            url: "/bonusrendering",
            type: 'GET',
            dataType: 'json',
            data: {"type":"index","first":first,"max":max,"name":bonustype,"sorttype":sort

            },
            async: true,
            success: function (response) {
                first=parseInt(first)+50;
                button1.attr("first",max);
                button.attr("first",max);
                var total=parseInt($("#total_bonuses").html());
                $("#current_bonus").html(total);
                $(".list-data").append(response[0]);
                $('.list-data .lazyload').lazyload();
                $("#bottom_spinner").css("display","none");
                $("#more_bonuses").css("display","none");
                $("#all_bonuses").css("display","none");

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
