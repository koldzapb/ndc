$(document).ready(function() {
    $(document).on("click", "[comment]", function() {



        var commentId=$(this).attr("comment");




        $.ajax({
            url: "/removeusercomment",
            type: 'POST',
            dataType: 'json',
            data: {"commentid":commentId

            },
            async: true,
            success: function (response) {


                location.reload();

            }
        });
    });

});