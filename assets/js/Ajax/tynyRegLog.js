$(document).ready(function() {



    $(document).on("click", "#tiny-register", function() {

        TINY.box.show({url:'/registerinitiation' });
    });
    $(document).on("click", "#tiny-login", function() {

        TINY.box.show({url:'/logininitiation' });
    });

});