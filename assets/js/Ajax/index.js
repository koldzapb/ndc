$(document).ready(function() {
    $.ajax({
        url: "/bonusrendering",
        type: 'GET',
        dataType: 'json',
        data: {"type":"index","name":"No_Deposit","sorttype":"highRating"

        },
        async: true,
        success: function (bonuses) {
            $(".homepage-casino-list .list-data").html(bonuses[0]);
            $(".homepage-casino-list .lazyload").lazyload();
            $("#total_bonuses").html(bonuses[1]);
            if(bonuses[1]<50){
                var moreBonusesButton=$("#more_bonuses");
                var allBonusesButton=$("#all_bonuses");
                allBonusesButton.hide();
                moreBonusesButton.hide();
                $("#current_bonus").html(bonuses[1]);
            }
            $(function () {
                $(".homepage-casino-list .tooltip-btn").tooltip();
                $('.homepage-casino-list .copy-code').each(function(){
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

    $(document).on("click", ".homepage-casino-list .tabs a", function() {
        var sort=$("#dropdownFilter").attr("data-sorttype");
        var name=($(this).attr("name"));
        $("#more_bonuses").css("display","inline-block");
        $("#all_bonuses").css("display","inline-block");
        $(".homepage-casino-list .spinner").css("display","block");

        $.ajax({
            url: "/bonusrendering",
            type: 'GET',
            dataType: 'json',
            data: {"type":"index","name":name,"sorttype":sort

            },
            async: true,
            success: function (bonuses) {
                var moreBonusesButton=$("#more_bonuses");
                var allBonusesButton=$("#all_bonuses");


                //alert(casinos[0].bonuses[0].bonustypes[0].name);
                //return false;
                if(bonuses[1]<=10)
                {
                    allBonusesButton.hide();
                    moreBonusesButton.hide();
                }
                else {
                    allBonusesButton.show();
                    moreBonusesButton.show();
                }
                $(".homepage-casino-list .list-data").html(bonuses[0]);
                $(".homepage-casino-list .lazyload").lazyload();
                $(".homepage-casino-list .spinner").css("display","none");
                moreBonusesButton.attr('bonustype',name);
                moreBonusesButton.attr('first',50);
                allBonusesButton.attr('first',50);
                allBonusesButton.attr('bonustype',name);
                $("#total_bonuses").html(bonuses[1]);
                $("#current_bonus").html(50);

                var current=parseInt($("#current_bonus").html());
                var  total=parseInt($("#total_bonuses").html());
                if(current>bonuses[1]){
                    $("#current_bonus").html(bonuses[1]);
                }
                if(current>=total){
                    allBonusesButton.hide();
                    moreBonusesButton.hide();
                }
                $(function () {
                    $(".homepage-casino-list .tooltip-btn").tooltip();
                    $('.homepage-casino-list .copy-code').each(function(){
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

