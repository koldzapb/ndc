function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function createCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

$(document).ready(function() {


    dontshow=getCookie("showsubs");
    accept=getCookie("accept");

    if(accept=="")
    {
        setTimeout(function(){ $("#cookie-bar").show() }, 3000);
    }


    if(accept!="" && dontshow=="")
    {
        setTimeout(function(){ $("#subscription").show(); }, 180000);
    }


    $(document).on("click", "#close_subscription_popup", function() {
        var c=document.getElementById('dont_show_again').checked;
        $("#subscription").css("display","none");
        if(c){
            createCookie('showsubs', "clicked", 365);
        }
    });


    $(document).on("click", ".hide-cookie-bar", function() {
        $("#cookie-bar").css("display","none");
        createCookie('accept', "clicked", 365);
    });


    $(document).on("click", "#newsletter_subscribe", function() {

        var c=document.getElementById('dont_show_again').checked;
        if(c){
            createCookie('showsubs', "clicked", 365);
        }
        var email=$("#newsletter_subscription_only").val();
        $.ajax({
            url: "/subscriptiononly",
            type: 'POST',
            dataType: 'json',
            data: {"email":email
            },
            async: true,
            success: function (response) {
                $("#newsletter_subscribe_error").html(response).show();
            }
        });

    });

});
