
  <div style="width:100%;height:100%;">
    <canvas id="barChart" height="auto" width="auto"></canvas>
  </div>


  <!-- Javascript code for the Bar Chart -->
  <script>
     $( document ).ready(function() {
     const CHART = document.getElementById("barChart");

      Chart.defaults.scale.ticks.beginAtZero = true;

     let barChart = new Chart(CHART,{
       type: 'bar',
       data: {
         labels: ["January", "February", "March", "April"],
         datasets: [
           {
             label:'Numbers 1',
             backgroundColor: '#800000',
             borderColor:'#800000',
             borderWidth: 2,
             data: [10,20,55,30]
           },
           {
             label:'Numbers 2',
             backgroundColor: '#FA8072',
             borderColor:'##FA8072',
             borderWidth: 2,
             data: [5,31,74,70]
           },
           {
             label:'Numbers 3',
             backgroundColor: '#FF5733',
             borderColor:'#FF5733',
             borderWidth: 2,
             data: [14,25,40,48]
           }
         ]
       }
     });
    })
  </script>
