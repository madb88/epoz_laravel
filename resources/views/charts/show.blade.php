@extends('app')

@section('content')
  <h1>{{ $chart->title }}</h1>

  <div class="description">
    {{ $chart->description }}
  </div>

  <div class="medicines">
    {{ $chart->medicies }}
  </div>
  
@stop
