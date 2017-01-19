@extends('app')

@section('content')
  <h1>Edit: {!! $chart->title !!}</h1>
  {!! Form::model($chart, ['method' => 'PATCH',
                  'action' => ['ChartsController@update',
                  $chart->id]]) !!}

  {{-- Added for test --}}
  {!! Form::hidden('approved', 1, ['class' => 'form-control'])  !!}

    @include('includes.form',['submitButtonText'=>'Update Chart'])

  {!! Form::close() !!}

@stop
