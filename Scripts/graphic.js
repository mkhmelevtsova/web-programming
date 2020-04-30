var dataArray;

window.onload = async function() {

    await getDataArray();
    if (this.dataArray == this.undefined || this.dataArray.length == 0)
        alert("Данные пустые!");
    else drawGraphic();

}

async function getDataArray() {
    var host = "localhost:8080/m/";
    await $.get('graphicData.php/', async function(data) {
        dataArray = JSON.parse(data);
    });
}

function drawLine(ctx, startX, startY, endX, endY) {
    ctx.beginPath();
    ctx.moveTo(startX, startY);
    ctx.lineTo(endX, endY);
    ctx.stroke();
}

function drawArc(ctx, centerX, centerY, radius, startAngle, endAngle) {
    ctx.beginPath();
    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
    ctx.stroke();
}

function drawPieSlice(ctx, centerX, centerY, radius, startAngle, endAngle, color) {
    ctx.fillStyle = color;
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
    ctx.closePath();
    ctx.fill();
}

function drawGraphic() {
    var myCanvas = document.getElementById("chart");
    myCanvas.style.marginTop = '30px';
    myCanvas.style.marginBottom = "30px"
    var legends = document.getElementById("myLegend");
    myCanvas.width = 300;
    myCanvas.height = 300;

    var ctx = myCanvas.getContext("2d");
    colors = ["#fde23e", "#f16e23", "#57d9ff", "#937e88", "#ddad33"];

    var total_value = 0;
    var color_index = 0;
    for (var categ in dataArray) {
        var val = dataArray[categ];
        total_value += val;
    }

    var legendHTML = "";
    var start_angle = 0;
    color_index = 0;
    for (categ in dataArray) {
        val = dataArray[categ];
        var slice_angle = 2 * Math.PI * val / total_value;
        legendHTML += "<div style='color:black;'> <span style='display:inline-block;width:20px;background-color:" + colors[color_index % colors.length] + ";'>&nbsp;</span> " + val + "</div>";

        drawPieSlice(
            ctx,
            myCanvas.width / 2,
            myCanvas.height / 2,
            Math.min(myCanvas.width / 2, myCanvas.height / 2),
            start_angle,
            start_angle + slice_angle,
            colors[color_index % colors.length]
        );

        start_angle += slice_angle;
        color_index++;
    }
    legends.innerHTML = legendHTML;
}