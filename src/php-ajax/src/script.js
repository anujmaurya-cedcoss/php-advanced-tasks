$(document).ready(function () {
    $(document).on('click', '.btn', function() {
        let val = $("#input-text").val();
        let method = $(this).attr('id');
        $.ajax({
            url : './convert_case.php',
            type : 'POST',
            data : {'val' : val, 'method' : method},
            dataType : 'text',
            success : function(res) {
                $("#input-text").val(res);
            }
        })
    });
});