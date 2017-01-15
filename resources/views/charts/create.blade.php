@extends('app')

@section('content')
  <h1>Add a New Chart</h1>

  <hr />
  {!! Form::open(['url' => 'charts']) !!}
    <div class="form-group">
      {!! Form::label('title', 'Title:')  !!}
      {!! Form::text('title', null, ['class' => 'form-control'])  !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description:')  !!}
      {!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
    </div>

    <div class="form-group">
      {!! Form::label('medicines', 'Medicines:')  !!}
      {!! Form::text('medicines', null, ['class' => 'form-control'])  !!}
    </div>

    <!-- Adding new chart -->
    <div class="form-group">
      {!! Form::submit('Add Chart', ['class'=>'btn btn-primary form-control']) !!}
    </div>
  {!! Form::close() !!}
@stop
