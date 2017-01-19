@extends('app')

@section('content')
  <h1>Add a New Chart</h1>

  <hr />
  {!! Form::open(['url' => 'charts']) !!}

  {{-- Added for test --}}
  {!! Form::hidden('approved', 1, ['class' => 'form-control'])  !!}
    @include('includes.form',['submitButtonText'=>'Add Chart'])
  {!! Form::close() !!}


@stop
