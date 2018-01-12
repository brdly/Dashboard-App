
  <div style="width:100%;height:100%;">
    <canvas id="lineChart" height="auto" width="auto"></canvas>
  </div>


<!-- Javascript code for the Line Chart -->
<script>
  const CHART = document.getElementById("lineChart");
  let lineChart = new Chart(CHART, {
  type: 'line',
  data: {
    labels:["January", "February", "March", "April", "May", "June", "July" , "August"],
    datasets:  [
      {
        label:"Fiverr",
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
        data: [3,3.6,3.8,3.1,3,3.2,3.8,4],

      },
      {
        label:"Amazon Mechanical Turk",
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
        data: [4.8,4.3,4.9,4.8,4.8,5,4.8,4.7],

      },
      {
        label:"Upwork",
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
        data: [4.5,4.6,4.6,4.5,4.3,4.2,4,4.1],

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
  </script>
