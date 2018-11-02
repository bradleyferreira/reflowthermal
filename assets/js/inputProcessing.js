
function getData() {

    var min = parseInt($("#min").val());
    var max = parseInt($("#max").val());
    var minC = fToC(min);
    var maxC = fToC(max);
    var inArray = [];
    var outArray = [];
    var reply = "<table class='table table-bordered'><thead><tr><th>Fahrenheit</th><th>Celsius</th></tr></thead><tbody>";

    for (var i = min; i < max + 1; i++) {
        reply += "<tr><td>" + i + "</td><td>" + fToC(i) + "</td></tr>";
        inArray.push(i);
        outArray.push(fToC(i));
    }

    reply += "</tbody></table>";
    console.log(inArray);
    console.log(outArray);
    makeChart(inArray,outArray);
    $("#myTable").html(reply);
    var outputString = "<table class='table table-bordered'><tr><th>Fahrenheit</th><th>Celsius</th></tr></thead><tbody><tr><td>"+min+ " to " + max + "</td><td>" + minC + " to " + maxC + "</td></tr></table>";
    $("#myResults").html(outputString);
}

function fToC(input) {
    cVal = ((input - 32) * 5 / 9).toFixed(2);
    return (cVal);
}

function makeChart(inArray,outArray) {
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: inArray,
            datasets: [{
                label: 'F',
                data: inArray,
                borderColor: '#d1478c',
                fill: 'true'
            },
                {
                    label: 'C',
                    data: outArray,
                    borderColor: '#ff7a5c',
                    fill: 'true'
                }]
        }
    });
}

