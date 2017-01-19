<div class="form-group {{ $errors->has('title') ? 'has-error' :'' }}">
  {!! Form::label('title', 'Title:')  !!}
  {!! $errors->first('title',
    '<span class="help-block"><strong>:message</strong></span>') !!}
  {!! Form::text('title', null, ['class' => 'form-control'])  !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' :'' }}">
  {!! Form::label('description', 'Description:')  !!}
  {!! $errors->first('description',
    '<span class="help-block"><strong>:message</strong></span>') !!}
  {!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
</div>

<div class="form-group {{ $errors->has('medicines') ? 'has-error' :'' }}">
  {!! Form::label('medicines', 'Medicines:')  !!}
  {!! $errors->first('medicines',
    '<span class="help-block"><strong>:message</strong></span>') !!}
  {!! Form::text('medicines', null, ['class' => 'form-control'])  !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
