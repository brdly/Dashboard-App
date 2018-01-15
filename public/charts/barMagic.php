<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <base href="">
  <meta charset="utf-8">
  <title>Overall ratings over time - Group 4</title>
  <meta name="description" content="Bar Chart for SPAT Task - Group 4.">

</head>
<body>
  <div>
    <canvas id="barChart" height="100%" width="100%"></canvas>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

  <!-- Javascript code for the Bar Chart -->
  <script>
     const CHART = document.getElementById("barChart");

      Chart.defaults.scale.ticks.beginAtZero = true;

     let barChart = new Chart(CHART,{
       type: 'bar',
       data: {
         labels: ["January", "February", "March", "April","May", "June", "July", "August"],
         datasets: [
           {
             label:'Fiverr',
             backgroundColor: '#800000',
             borderColor:'#800000',
             borderWidth: 2,
             data: [4.8,4.6,4.7,4.7,4.8,5,4.8,4.7]
           },
           {
             label:'Amazon Turk',
             backgroundColor: '#FA8072',
             borderColor:'#FA8072',
             borderWidth: 2,
             data: [4.8,4.3,4.9,4.8,4.8,4.9,4.9,4.9]
           },
           {
             label:'Upwork',
             backgroundColor: '#873407',
             borderColor:'#873407',
             borderWidth: 2,
             data: [4.5,4.6,4.6,4.5,4.3,4.2,4,4.1]
           },
           {
             label:'CloudCrowd',
             backgroundColor: '#a95746',
             borderColor:'#a95746',
             borderWidth: 2,
             data: [4.7,4.8,4.7,4.7,4.5,4.4,4.3,4.1]
           },
           {
             label:'CrowdFlower',
             backgroundColor: '#db9772',
             borderColor:'#db9772',
             borderWidth: 2,
             data: [4.7,4.5,4.6,4.6,4.6,4.7,4.5,4.7]
           },
           {
             label:'ClickWorker',
             backgroundColor: '#f65f0c',
             borderColor:'#f65f0c',
             borderWidth: 2,
             data: [4.2,4,4.1,4.1,4.3,4.3,4.4,4.3]
           }
         ]
       }
     });
  </script>

</body>
</html>
