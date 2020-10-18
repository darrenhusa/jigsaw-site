@extends('_layouts.documentation')

@section('content')

  {{-- @include('factbook.section-02') --}}
  <h1>Line Chart</h1>
  {{-- <div id="chart2" width="100" height="50"> --}}
    {{-- <canvas id="" width="800" height="450"></canvas> --}}
  {{-- </div> --}}
  <canvas id="line-chart" width="800" height="450"></canvas>
  <script src="/assets/build/js/line.js"></script>

@endsection
