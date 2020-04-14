window.onload = function() {

    function customAppend(objectToAppend, stringSpan, stringAppend) {
        objectToAppend.append("<p class=\"ajaxp\"><span>" + stringSpan + "</span>" + stringAppend + "</p>");
    }

    $('.jcarousel').jcarousel({
        // Конфигурация инициализации
    });

    $('.jcarousel-prev').jcarouselControl({ target: '-=1' });
    $('.jcarousel-next').jcarouselControl({ target: '+=1' });

    $('.about').click(function() {
        var target = $('.jcarousel').jcarousel('target').children("img")[0];
        var id = target.id;
        var fullInfoDiv = $('#full-info');
        fullInfoDiv.empty();
        $.get('ajaxXmlGet.php/?serial=' + id, function(data) {
            var responseData = JSON.parse(data);
            customAppend(fullInfoDiv, 'Name: ', responseData.name[0]);
            customAppend(fullInfoDiv, 'Serial: ', responseData.serialNumber[0]);
            customAppend(fullInfoDiv, 'Year: ', responseData.yearOfIssue[0]);
            customAppend(fullInfoDiv, 'Memory: ', responseData.memory[0]);
            customAppend(fullInfoDiv, 'Operating System: ', responseData.operatingSystem[0]);
            customAppend(fullInfoDiv, 'RAM: ', responseData.ram[0]);
            customAppend(fullInfoDiv, 'Price: ', responseData.price[0]);
        });
    });
}