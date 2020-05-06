$(document).ready(function() {

    $(document).on("click", "#join_button", function() {

        var name=$("#news_name").val();
        var email=$("#news_email").val();
        $("#reg_username").val(name)
        $("#reg_email").val(email);

    });
});