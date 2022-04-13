$(document).ready(function () {
    let commentsCount = 0;
    $('.btn').click(function (e) {
        e.preventDefault();
        commentsCount = commentsCount + 2;
        /*$('#response').html('');*/

        $.ajax({
            url: '../../controllers/2messages.php',
            type: 'POST',
            dataType: 'json',
            data: {
                commentsNewCount: commentsCount
            },
            success(data) {
                if (data.status) {
                    $('#response').html(data.answer);
                    console.log(data.answer);
                    for (let i = 0; i < data.answer.length; i++) {
                        $('#response').append(data.answer[i].full_name + ' - ' + data.answer[i].message + '<br>');
                    }
                }
            }
        });
    });
});