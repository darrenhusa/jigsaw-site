import Chart from 'Chart.js';
import Stacked100Plugin from 'chartjs-plugin-stacked100';

// var plugin = { };

// import * as pluginStacked100 from 'chartjs-plugin-stacked100';
// import * from 'chartjs-plugin-stacked100';
// import 'chartjs-plugin-stacked100';

new Chart(document.getElementById("100%-stacked-bar"), {
  type: "horizontalBar",
  data: {
    labels: ["Foo", "Bar"],
    datasets: [
      { label: "bad", data: [5, 25], backgroundColor: "rgba(244, 143, 177, 0.6)" },
      { label: "better", data: [15, 10], backgroundColor: "rgba(255, 235, 59, 0.6)" },
      { label: "good", data: [10, 8], backgroundColor: "rgba(100, 181, 246, 0.6)" }
    ]
  },
  options: {
    plugins: {
      // stacked100: { enable: true }
    }
  }
});
