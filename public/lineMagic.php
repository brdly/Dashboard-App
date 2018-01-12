
  <div style="width:100%;height:100%;">
    <canvas id="lineChart" height="auto" width="auto"></canvas>
  </div>


<!-- Javascript code for the Line  Chart -->
  <script>
     $( document ).ready(function() {
  const CHART = document.getElementById("lineChart");
  let lineChart = new Chart(CHART, {
  type: 'line',
  data: {
    labels:["January", "February", "March", "April", "May", "June", "July" , "August"],
    datasets:  [
      {
        label:"firstLine",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"rgba(75,192,192,0.4)",
        borderColor:"rgba(75,192,192,1)",
        borderCapStyle: 'butt',
        borderDash: [],
        borderDashOffset: 0.0,
        borderJoinStyle: 'miter',
        pointBorderColor: "rgba(75,192,192,1)",
        pointBackgroundColor: "#fff",
        pointBorderWidth: 1,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(75,192,192,1)",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointHoverBorderWidth: 2,
        pointRadius: 1,
        pointHitRadius: 10,
        data: [65,59,80,81,56,55,40],

      },
      {
        label:"secondLine",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"rgba(75,75,192,0.4)",
        borderColor:"rgba(75,72,192,1)",
        borderCapStyle: 'butt',
        borderDash: [],
        borderDashOffset: 0.0,
        borderJoinStyle: 'miter',
        pointBorderColor: "rgba(75,72,192,1)",
        pointBackgroundColor: "#fff",
        pointBorderWidth: 1,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(75,72,192,1)",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointHoverBorderWidth: 2,
        pointRadius: 1,
        pointHitRadius: 10,
        data: [65,55,76,92,67,69,72],

      },
      {
        label:"thirdLine",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"rgba(192,75,192,0.4)",
        borderColor:"green",
        borderCapStyle: 'butt',
        borderDash: [],
        borderDashOffset: 0.0,
        borderJoinStyle: 'miter',
        pointBorderColor: "green",
        pointBackgroundColor: "#fff",
        pointBorderWidth: 1,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "green",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointHoverBorderWidth: 2,
        pointRadius: 1,
        pointHitRadius: 10,
        data: [52,49,42,49,55,53,60],

      }

    ]
  },
  options:{
    scales:{
      yAxes:[{
        ticks:{
          beginAtZero: true
        }
      }]
    }
  }
  });
  })
  </script>
