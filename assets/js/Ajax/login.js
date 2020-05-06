$(document).ready(function() {



    $(document).on("click", "#loginbutton", function(event) {
        event.preventDefault();

        var username=$("#login_username").val();
        var password=$("#login_password").val();
        var body=JSON.stringify({username:username,password:password});

        $.ajax({
            url: '/login',
            headers: {'Content-Type':'application/json'},
            method: 'POST',
            dataType: 'json',
            data: body,
            success: function(data){

                $("#login_error").hide();
                location.reload();

            },
            error: function(request,status,error){
               $("#login_error").show();
            }
        });
    });

});