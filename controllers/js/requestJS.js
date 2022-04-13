
document.forms.form.onsubmit = function (e) {
    e.preventDefault();
    let userInput = document.forms.form.full_name.value;
    userInput = encodeURIComponent(userInput);
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '../../controllers/all_records.php?' + 'full_name=' + userInput); // + '&key2=value2');
    //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let data = JSON.parse(xhr.responseText);
            if (data.status) {
                let html = '';
                for (let i = 0; i < data.answer.length; i++) {
                    let full_name = data.answer[i].full_name;
                    let message = data.answer[i].message;
                    html += "<tr>";
                    html += "<td>" + full_name + "</td>" + " - ";
                    html += "<td>" + message + "</td>" + "<br>";
                    html += "</tr>";
                }
                document.getElementById("response").innerHTML = html;
                $('.msg').removeClass('none').text(data.message);
                $('#form').trigger('reset');
            } else {
                $('.msg').removeClass('none').text(data.message);
                $('#form').trigger('reset');
            }
        }
    }
};
