$(document).ready(function() {
    $(document).on("click", ".user-like-post", function() {

        var postlike=$(this);
        var postId=postlike.attr("data-postid");
        var userId=parseInt(postlike.attr('data-userid'));

        $.ajax({
            url: "/userlikespost",
            type: 'POST',
            dataType: 'json',
            data: {"id":postId

            },
            async: true,
            statusCode: {
                400: function(response) {
                    $("#alert").html("<strong>Register/login to like.</strong>");
                    document.getElementById('welcomeDiv').style.display = "block";
                    $( "#welcomeDiv" ).fadeOut( 2000, function() {});

                }
            },
            success: function (response,xhr,textStatus) {

                postlike.attr("data-original-title","Unlike");
                postlike.attr("class","unlike-user-post");
                postlike.attr("data-userid",userId);

                var likesnum=parseInt(postlike.siblings(".post-likes-num").html())
                $("#alert").html(response);
                document.getElementById('welcomeDiv').style.display = "block";
                $( "#welcomeDiv" ).fadeOut( 2000, function() {});


                if(likesnum>0)
                {
                    postlike.siblings(".post-likes-num").html(likesnum+1);
                }

            }
        });
    });

});