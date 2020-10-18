@extends('_layouts.documentation')

@section('content')

  {{-- @include('factbook.section-02') --}}
  <h1>Grouped Bar Chart</h1>
  <div id="chart2" width="100" height="50">
    <canvas id="bar-chart-grouped" width="800" height="450"></canvas>
  </div>
  <script src="/assets/build/js/bar-chart-grouped.js"></script>
  
@endsection
