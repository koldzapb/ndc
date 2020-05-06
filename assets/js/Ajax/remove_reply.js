$(document).ready(function() {
    $(document).on("click", "[data-reply]", function() {

        var replyId=$(this).attr("data-reply");

        $.ajax({
            url: "/removereply",
            type: 'POST',
            dataType: 'json',
            data: {"replyid":replyId

            },
            async: true,
            success: function (response) {
                location.reload();
            }
        });
    });

});