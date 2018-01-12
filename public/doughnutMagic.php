
  <div style="width:100%;height:100%;">
    <canvas id="doughnut" height="auto" width="auto"></canvas>
  </div>


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