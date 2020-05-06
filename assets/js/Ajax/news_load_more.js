
$(document).ready(function() {
    var isWorking=0;
    $(document).on('click', "#load_news_button", function() {
        var button=$(this);
        var first=parseInt(button.attr('data-first'));
        var total=parseInt($("#news_totalnumber").html());

        $.ajax({
            url:"/morenews",
            type: 'GET',
            dataType: 'json',
            data: {

            },
            async:true,
            success: function(response) {
                first=first+10;
                button.attr("data-clicked","true");
                if(first>total) first=total;
                button.attr("data-first",first);
                button.hide();
                $("#news_holder_ajax").append(response);
                $("#news_holder_ajax .lazyload").lazyload();
                $("#news_current").html(first);
                if($(document).width()<753)
                {
                    $(".articles-sidebar").hide();
                }
                $(".latest-bonus-wrapper").hide();
                $(".footer").hide();

            }

        })





    });

    $(window).scroll(function(e){

        var button=$("#load_news_button");
        var clicked=$("#load_news_button").attr("data-clicked");
        var total=parseInt($("#news_totalnumber").html());
        var first=parseInt(button.attr('data-first'));


        if($(window).scrollTop()===($(document).height()-window.innerHeight) && clicked==="true" &&(total-first)>0 ){

                $('#loading').fadeIn();

                if(isWorking==0)
                {
                    isWorking=1;
                    appendContent();
                    setTimeout(function(){isWorking=0},1000);
                }


                $('#loading').fadeOut();





        }
    });


});



var appendContent=function(){
    var button=$("#load_news_button");
    var first=parseInt(button.attr('data-first'));
    var total=parseInt($("#news_totalnumber").html());

    $.ajax({
        url:"/morenews",
        type: 'GET',
        dataType: 'json',
        data: { "first":first

        },
        async:true,
        success: function(response) {
            first=first+10;
            button.attr("data-clicked","true");
            if(first>=total){

                first=total;
                $(".articles-sidebar").show();
                $(".latest-bonus-wrapper").show();
                $(".footer").show();
            }
            button.attr("data-first",first);
            $("#news_current").html(first);
            button.hide();
            $("#news_holder_ajax").append(response);
            $("#news_holder_ajax .lazyload").lazyload();

        }

    })

};

