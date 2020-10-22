@extends('_layouts.documentation')

@section('content')

  {{-- @include('factbook.section-02') --}}
  <h1>Bar Chart</h1>
  <canvas id="bar-chart"></canvas>
  <!-- <canvas id="myChart" height="300" width="300"></canvas> -->
  <script src="/assets/build/js/bar-chart.js"></script>

@endsection

@section('right-sidebar-links')
  <p class="mb-6 text-sm uppercase font-light tracking-wide text-blue">On this page</p>
  <a href="#" class="mb-4 text-blue-darker hover:text-purple text-sm font-normal leading-normal">Link text</a>
  <a href="#" class="mb-4 text-blue-darker hover:text-purple text-sm font-normal leading-normal">Link text</a>
  <a href="#" class="mb-4 text-blue-darker hover:text-purple text-sm font-normal leading-normal">Link text</a>
  <a href="#" class="mb-4 text-blue-darker hover:text-purple text-sm font-normal leading-normal">Link text</a>
  <a href="#" class="mb-4 text-blue-darker hover:text-purple text-sm font-normal leading-normal">Link text</a>
@endsection
