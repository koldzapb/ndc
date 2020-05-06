$(document).ready(function() {



    $(document).on("click", "#registerbutton", function() {

        var email =$("#reg_email").val();
        var username=$("#reg_username").val();
        var password=$("#reg_password").val();
        var rep_password=$("#reg_password2").val();
        var error=$("#register_error");
        var newsletter=null;
        if($("#reg_newsletter:checked").is(':checked')){
              newsletter=true;
        }
        else {
              newsletter=false;
        }

        var data=JSON.stringify({email:email,username:username,plainPassword:{first:password,second:rep_password},newsletter:newsletter});

        if ($("#reg_terms").is(':checked')){
            $.ajax({
                url: "/register",
                headers: {'Content-Type':'application/json'},
                method: 'POST',
                dataType: 'json',
                data:data,
                success: function (response) {
                    response=JSON.parse(response);
                    $("#register_error").html(response).show();
                    $("#registerbutton").removeClass('disabled');
                    $("#terms_error").hide();

                }
            });
        } else {
            $("#registerbutton").addClass('disabled');
            $("#terms_error").show();
        }
    });

    $('.terms-checkbox').click(function(){
        if($("#reg_terms").is(':checked')){
            $("#registerbutton").removeClass('disabled');
            $("#terms_error").hide();
        } else {
            $("#registerbutton").addClass('disabled');
            $("#terms_error").show();
        }
	});


});