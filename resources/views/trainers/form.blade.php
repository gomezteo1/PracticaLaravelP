<div class="form-group">
    {!!Form::label('name','Name') !!}
    {!!Form::text('name',null,['class' => 'form-control']) !!} 
  </div>
  <div class="form-group">
    {!!Form::label('town','Town') !!}
    {!!Form::text('town',null,['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('type','Type') !!}
    {!!Form::text('type',null,['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('idTrainer','idTrainer') !!}
    {!!Form::number('idTrainer',null,['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('description','Description') !!}
    {!!Form::text('description',null,['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!!Form::label('avatar','Avatar') !!}
    {!!Form::file('avatar',['class' => 'form-control']) !!}
  </div>
  
  {!!Form::submit('Save',['class'=>'btn btn-outline-secondary']) !!}