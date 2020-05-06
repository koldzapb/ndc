$(document).ready(function() {

    $(document).on("click", ".homepage-casino-list #bonus_sort a", function() {


        var sortType=$(this).attr("data-sorttype");
        var sortText=$(this).attr("data-text");
        $("#dropdownFilter").attr("data-sorttype",sortType);
        var bonusType=$("#more_bonuses").attr("bonustype");
        var numberOfBonusesToReturn=$("#current_bonus").html();
        numberOfBonusesToReturn=parseInt(numberOfBonusesToReturn);

        $.ajax({
            url: "/bonusrendering",
            type: 'GET',
            dataType: 'json',
            data: {"type":"index","max":numberOfBonusesToReturn,"sorttype":sortType,"name":bonusType,"sorttypenew":sortText

            },
            async: true,
            success: function (response) {

                $(".list-data").html(response[0]);
                $(".list-data .lazyload").lazyload();
                $("#dropdownFilter").html(sortText);
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