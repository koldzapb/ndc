function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    $.ajax({
        url: "/googlesignin",
        type: "POST",
        data: {"id":profile.getId(),"name":profile.getName(),"email":profile.getEmail()},
        success: function()
        {
            location.reload();
        }
    });
}
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}