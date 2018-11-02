<html>
<head>
    <script src="assets/js/inputProcessing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Reflow Thermal</title>
</head>
<body>
<div class="container">
    <h1>Reflow Thermal</h1>
    <div class="mySubtitle">Visualize temperature changes in celsius.</br></div>
    <div class="mySubtitle2">For those who use Fahrenheit</div>
<form id="property">
Min (F):<input class="form-control myInput" type="text" id="min" value="-40" >
Max (F):<input class="form-control myInput" type="text" id="max" value="0">
    <button class ="mySubmitButton" onclick="getData();return false;">Run</button><br>

    <canvas id="myChart" width="700" height="400"></canvas>

<div id="myResults"></div>
<div id="myTable"></div>

</div>
</body>
</html>
