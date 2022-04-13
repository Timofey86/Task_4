$('.btn').click(function (e) {
    e.preventDefault();
    $('input').removeClass('error');
    $('#response').html('');
    let full_name = $('input[name="full_name"]').val();

    $.ajax({
        url: '../../controllers/all_records.php',
        type: 'GET',
        dataType: 'json',
        data: {
            full_name: full_name
        },
        success(data) {
            if (data.status) {
                $('.msg').removeClass('none').text(data.message);
                $('#form').trigger('reset');
                if (data.answer) {
                    $('#response').html(data.answer);
                    //console.log(data);
                    for (let i = 0; i < data.answer.length; i++) {
                        $('#response').append(data.answer[i].full_name + ' - ' + data.answer[i].message + '<br>');
                    }
                }
            } else {
                data.fields.forEach(function (field) {
                    $('.msg').removeClass('none').text(data.message);
                    $('input[name="${field}"]').addClass('error');
                });
            }
        }
    });
});