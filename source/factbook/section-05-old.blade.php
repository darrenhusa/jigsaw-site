@extends('_layouts.documentation')

@section('content')

  <h1>100% Stacked Bar Chart</h1>
  <canvas id="100%-stacked-bar" width="800" height="450"></canvas>
  {{-- <script src="chart.js/dist/Chart.js"></script> --}}
  <script src="/assets/build/js/100%-stacked-bar-chart.js"></script>
{{-- <script>
new Chart(document.getElementById("stacked-bar"), {
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
      stacked100: { enable: true }
    }
  }
});
</script> --}}

@endsection
