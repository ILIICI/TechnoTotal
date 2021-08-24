function displayParam($var) {
    var element = document.getElementsByClassName('popUpWindow');
    element[0].style.display = 'block';

    var text = document.createTextNode($var);
    var line = document.createElement("p");
    line.setAttribute("id", "line");
    line.appendChild(text);

    var box = document.getElementById("modal-box-content");
    box.appendChild(line);

}

function closeWindow() {
    var element = document.getElementsByClassName('popUpWindow');
    element[0].style.display = 'none';

    var elmnt = document.getElementById("line");
    elmnt.remove();

}