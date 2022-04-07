$('.btn').click(function (e) {
    e.preventDefault();
    $('input').removeClass('error');

    let full_name = $('input[name="full_name"]').val();
    let message = $('input[name="message"]').val();

    $.ajax({
        url: '/controllers/send_message.php',
        type: 'POST',
        dataType: 'json',
        data: {
            full_name: full_name,
            message: message
        },
       success(data) {
            if (data.status) {
                $('.msg').removeClass('none').text(data.message);
                $('#form').trigger('reset');
            } else {
                data.fields.forEach(function (field) {
                    $('.msg').removeClass('none').text(data.message);
                    $('input[name="${field}"]').addClass('error');
                });

            }
        }
    });
});