$(document).ready(function () {
    $(document).on('click', '#submit-btn', function () {
        str = $('.input-box').val();
        $.ajax({
            type: "POST",
            url: "./handler.php",
            data: {'data':str},
            dataType: 'text',
            success: function (res) {
                $('#show-message').html(res);
            }
        })
    });
});