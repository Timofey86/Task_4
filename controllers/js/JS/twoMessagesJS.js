let commentsCount = 0;
document.forms.form.onsubmit = function (e) {
    e.preventDefault();
    commentsCount = commentsCount + 2;
    let body = 'commentsNewCount=' + commentsCount;

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../controllers/twoMessages.php')
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(body);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let data = JSON.parse(xhr.responseText);
            console.log(data);
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
            }
        }
    }
};
