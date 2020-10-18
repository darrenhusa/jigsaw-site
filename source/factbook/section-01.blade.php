@extends('_layouts.documentation')

@section('content')

  {{-- @include('factbook.section-02') --}}
  <h1>Bar Chart</h1>
  <canvas id="bar-chart"></canvas>
  <!-- <canvas id="myChart" height="300" width="300"></canvas> -->
  <script src="/assets/build/js/bar-chart.js"></script>

@endsection
