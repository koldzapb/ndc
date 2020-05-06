$(document).ready(function() {
    $(document).on("click", ".reply-button", function() {
        var content=$(this).siblings(".reply-content").val();
        var commentid=$(this).siblings(".reply-content").attr("data-commentid");
        if (content.length < 1 ){
            alert("Please fill in reply box.")
            return false;
        }

        $.ajax({
            url: "/reply",
            type: 'POST',
            dataType: 'json',
            data: {"commentid":commentid,"content":content

            },
            async: true,statusCode: {
                401: function() {
                    alert("Register/login to reply.");
                },
                406: function(response){
                    alert("Empty replies are not allowed.")
                }
            },
            success: function (response,xhr,textStatus) {

                location.reload();


                }


        });
    });

});