$(document).ready(function() {

    $(document).on("click", ".homepage-casino-list #more_bonuses", function() {

        var button=$(this);
        var first=parseInt(button.attr("first"));
        var sort=$("#dropdownFilter").attr("data-sorttype");
        var max=parseInt(button.attr("max"));
        var bonustype=$(this).attr("bonustype");
        var totalbonuses=parseInt($("#total_bonuses").html());
        $("#bottom_spinner").css("display","block");



        $.ajax({
            url: "/bonusrendering",
            type: 'GET',
            dataType: 'json',
            data: {"type":"index","first":first,"max":max,"name":bonustype,"sorttype":sort

            },
            async: true,
            success: function (response) {

                first=parseInt(first)+max;
                if(first>=totalbonuses)
                {
                    $("#current_bonus").html(totalbonuses);
                    $("#more_bonuses").css("display","none");
                    $("#all_bonuses").css("display","none");
                }
                else{
                    $("#current_bonus").html(first);
                }

                button.attr("first",first);
                //alert(response);
                $("#all_bonuses").attr("first",first);
                $(".list-data").append(response[0]);
                $(".list-data .lazyload").lazyload();
                $("#bottom_spinner").css("display","none");
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