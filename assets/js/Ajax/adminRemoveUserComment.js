$(document).ready(function() {
    $(document).on("click", ".remove-user-comment", function() {



        var commentId=$(this).attr("data-commentid");
        var userId=$(this).attr("data-userid");




        $.ajax({
            url: "/adminremovepost",
            type: 'POST',
            dataType: 'json',
            data: {"id":commentId,"userid":userId

            },
            async: true,
            success: function (response) {


                location.reload();

            }
        });
    });

});