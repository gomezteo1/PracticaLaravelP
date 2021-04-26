@extends('layouts.app')
@section('title','Trainer-Edit')
@section('TrainerEdit')
  <br>
  <div class="container " aling="center">
    <div class="card sombra" style="width: 62rem;">
      <div class="card-body card-center">
        <div class="class"  style="background-color:#F0F8FF;">
          <br>
          <h3 class="links letra btn">EDIT TRAINER</h3>
        </div>
        
        {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true] ) !!}
          @include('trainers.form')
        {!! Form::close() !!}

      </div>
    </div>       
  </div>    
  <br><br>
@endsection