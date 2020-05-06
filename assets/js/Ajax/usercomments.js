$(document).ready(function() {
    $(document).on("click", "#commentbutton", function() {

        var userid=$(this).attr('userid');
        var content=$("#postcontent").val();

        if (content != ''){
            $('.post-form-error').hide();
            $.ajax({
                url: "/commentadd",
                type: 'POST',
                dataType: 'json',
                data: {"userid":userid,"content":content

                },
                async: true,
                success: function (response) {
                    location.reload();
                }
            });
        } else {
            $('.post-form-error').show();
        }
    });

});