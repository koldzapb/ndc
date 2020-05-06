$(document).ready(function() {
    $(document).on("click", "#postbutton", function() {

        var casinoid=$(this).attr('casinoid');
        var content=$("#postcontent").val();

        if (content != ''){
            $('.post-form-error').hide();
            $.ajax({
                url: "/postadd",
                type: 'POST',
                dataType: 'json',
                data: {"casinoid":casinoid,"content":content

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

