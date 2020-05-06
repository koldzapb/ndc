$(document).ready(function() {

    $(document).on("click", ".unlike-user-post", function() {
        var unlike=$(this);
        var userId=unlike.attr("data-userid");
        var postId=unlike.attr("data-postid");



        $.ajax({
            url: "/unlikepost",
            type: 'POST',
            dataType: 'json',
            data: {"postId":postId,"userId":userId

            },
            async: true,
            success: function (like) {

                $("#alert2").html(like);
                document.getElementById('unlikeAlert').style.display = "block";
                $( "#unlikeAlert" ).fadeOut( 2000, function() {});
                unlike.attr("data-original-title","Like");
                unlike.attr("class","user-like-post btn-like");
                var likesnum=parseInt(unlike.siblings(".post-likes-num").html())

                if(likesnum>0)
                {
                    unlike.siblings(".post-likes-num").html(likesnum-1);
                }


            }
        });
    });

});