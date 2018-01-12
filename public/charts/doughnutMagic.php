<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <base href="">
  <meta charset="utf-8">
  <title>Current/Former worker feedback - Group 4</title>
  <meta name="description" content="Doughnut Chart for SPAT Task - Group 4.">

</head>
<body>
  <div>
    <canvas id="doughnut" height="100%" width="100%"></canvas>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

  <!-- The Javascript for the Doughnut chart -->
  <script>

     const DONUT = document.getElementById("doughnut");

// Got the canvas div from the HTML as DONUT, and made a chart object called doughnut, with the title Current/Former Workers
// and 2 datasets representing positive and negative overall ratings from an individual platform.

//Current Workers is the outher ring, Former Workers is the interior ring.

     let doughnut = new Chart(DONUT, {
       type:'doughnut',
       data:{
         labels: ["Positive", "Negative"],
         datasets: [
           {
             label: 'Current',
             backgroundColor: ['#228B22','#800000'],
              data: [235,189]
           },
           {
           label: 'Former',
           backgroundColor: ['#228B22','#800000'],
           data: [152,220]
           }
           ]
       },
       options:
         {

           title:
         {
           display : true,
           text: "Current/Former Workers",
           fontSize: 28
         },

         cutoutPercentage: 40,

         animation:
         {
           animateScale: true
         }

       }
     });

  </script>
</body>
</html>
