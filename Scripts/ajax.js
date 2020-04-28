window.onload = function() {

    function printFields(info, stringspan, stringp) {
        var p = document.createElement('p');
        var span = document.createElement('span');
        span.innerText = stringspan;
        p.appendChild(span);
        p.innerText += stringp;
        info.appendChild(p);
    }

    var allLaptops = document.getElementsByClassName('laptops');
    for (i = 0; i < allLaptops.length; i++) {
        allLaptops[i].lastElementChild.onclick = function() {
            var SerialNumber = this.id;

            var xmlhttp = new XMLHttpRequest();
            if (xmlhttp != null) {
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        if (xmlhttp.responseText != "" && xmlhttp.responseText != null) {
                            var result = JSON.parse(xmlhttp.responseText);
                            var info = document.getElementById('info-more');
                            var close = document.createElement('button');
                            close.className = "close";
                            close.innerText = 'x';
                            info.innerHTML = '';
                            info.prepend(close);
                            printFields(info, 'Name: ', result.name[0]);
                            printFields(info, 'Price: ', result.price[0]);
                            printFields(info, 'SerialNumber: ', result.serialNumber[0]);
                            printFields(info, 'YearOfIssue: ', result.yearOfIssue[0]);
                            printFields(info, 'Memory: ', result.memory[0]);
                            printFields(info, 'OperatingSystem: ', result.operatingSystem[0]);
                            printFields(info, 'RAM: ', result.ram[0]);
                            console.log(result.name[0]);
                            info.style = "display:block";
                            close.onclick = function() {
                                info.style = 'display:none';
                            }
                        } else alert("Не найдена информация!");
                    }
                }
                xmlhttp.open('GET', 'ajaxXmlGet.php?serial=' + SerialNumber, true);
                xmlhttp.send(null);
            } else alert("Обьект не создался!");
        }
    }
}