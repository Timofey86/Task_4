$(document).ready(function () {
    let commentsCount = 0;
    $('.btn').click(function (e) {
        e.preventDefault();
        commentsCount = commentsCount + 2;

        $.ajax({
            url: '../../controllers/2messages.php',
            type: 'POST',
            dataType: 'json',
            data: {
                commentNewCount: commentsCount
            },
            success(data) {
                if (data.status) {
                    $('#div1').html(data.answer);
                    for (let i = 0; i < data.answer.length; i++) {
                        $('#div1').append(data.answer[i].full_name + ' - ' + data.answer[i].message + '<br>');
                    }
                }
            }
        });
    });
});