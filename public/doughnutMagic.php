
  <div style="width:100%;height:100%;">
    <canvas id="doughnut" height="auto" width="auto"></canvas>
  </div>


  <!-- The Javascript for the Doughnut chart -->
  <script>
     $( document ).ready(function() {
     const DONUT = document.getElementById("doughnut");
     let doughnut = new Chart(DONUT, {
       type:'doughnut',
       data:{
         labels: ["January", "February", "March", "April", "May"],
         datasets: [
           {
             label: 'Points',
             backgroundColor: ['#f1c40f','#e67e22','#16a085','#2980b9'],
              data: [10,20,55,30,10]
           },
           {
             label: 'superExplosions',
             backgroundColor: ['#f1c40f','#e67e22','#16a085','#2980b9'],
             data: [20,22,45,50,18]
           }
         ]
       },
       options: {
         cutoutPercentage: 30,
         animation: {
           animateScale: true
         }
       }
     });
    })
  </script>
