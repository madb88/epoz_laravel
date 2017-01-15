@extends('app')

@section('content')
  <h1>Charts</h1>

  @foreach($charts as $chart)
    <chart>
    <h2>
      <a href="{{ url('/charts', $chart->id) }}">{{ $chart->title }}</a>
    </h2>

    <div class="description">
      {{ $chart->description }}
    </div>

    <div class="medicines">
      {{ $chart->medicies }}
    </div>

    </chart>
  @endforeach
@stop
