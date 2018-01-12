
    <canvas id="lineChart" height="auto" width="auto"></canvas>


<!-- Javascript code for the Line Chart -->
  <script>

$( document ).ready(function() {


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
        backgroundColor:"#AD371E",
        borderColor:"#AD371E",
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
        data: [4.8,4.6,4.7,4.7,4.8,5,4.8,4.7],

      },
      {
        label:"Amazon Turk",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"#F07D64",
        borderColor:"#F07D64",
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
        data: [4.8,4.3,4.9,4.8,4.8,4.9,4.9,4.9],

      },
      {
        label:"Upwork",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"#F6BAAD",
        borderColor:"#F6BAAD",
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

      },
      {
        label:"CloudCrowd",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"#BE7647",
        borderColor:"#BE7647",
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
        data: [4.7,4.8,4.7,4.7,4.5,4.4,4.3,4.1],

      },
      {
        label:"CrowdFlower",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"#9E470F",
        borderColor:"#9E470F",
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
        data: [4.7,4.5,4.6,4.6,4.6,4.7,4.5,4.7],

      },
      {
        label:"ClickWorker",
        fill: false,
        lineTension: 0.1,
        backgroundColor:"#5F3215",
        borderColor:"#5F3215",
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
        data: [4.2,4,4.1,4.1,4.3,4.3,4.4,4.3],

      }

    ]
  },
  options:{
    scales:{
      yAxes:[{
        ticks:{
          beginAtZero: false
        }
      }]
    }
  }
  });

})
  </script>

