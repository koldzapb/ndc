$(document).ready(function() {



    $(document).on("submit", "#updateform", function(e) {
        //var data=JSON.stringify({email:email,username:username,plainPassword:{first:password,second:rep_password},newsletter:newsletter});
        e.preventDefault();



        $.ajax({
            url: "/updateuser", // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(response)   // A function to be called if request succeeds
            {

                response=JSON.parse(response);
                if(response[1]!==false)
                {
                    $(".updateImage").css("background-image","url("+response[1]+")");
                }
                $("#update_error").html(response[0]).show();
            }
        });






    });


    $(document).on("click", "#cancel_update", function(e) {
        e.preventDefault();
        location.reload();
        });



});