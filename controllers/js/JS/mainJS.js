document.forms.form.onsubmit = function (e) {
    e.preventDefault();
    let userInput = document.forms.form.full_name.value;
    let userInput2 = document.forms.form.message.value;
    let body = 'full_name=' + encodeURIComponent(userInput) + '&message=' + encodeURIComponent(userInput2);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/controllers/sendMessage.php')
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.send(body);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let data = JSON.parse(xhr.responseText);
            if (data.status) {
                $('.msg').removeClass('none').text(data.message);
                $('#form').trigger('reset');
            } else {
                data.fields.forEach(function (field) {
                    $('.msg').removeClass('none').text(data.message);
                    $('input[name="${field}"]').addClass('error');
                })
            }
        }
    }
};
