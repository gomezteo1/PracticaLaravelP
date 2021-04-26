@extends('layouts.app')
@section('title','Trainer-Create')
@section('TrainerCreate')
  <br>
  <div class="container " aling="center">
    <div class="card sombra" style="width: 62rem;">
      <div class="card-body card-center">
        <div class="class"  style="background-color:#F0F8FF;">
          <br>
          <h3 class="links letra btn">CREATE TRAINER</h3>
        </div> 
        <br>
        @include('common.errors')
        {!! Form::open(['route' => 'trainers.store','method'=>'POST','files'=>true]) !!}
          @csrf()
          @include('trainers.form')
        {!! Form::close() !!}
      </div>
        {{-- <form class="form form-group" method="POST" action="/trainers" enctype="multipart/form-data"> --}}
        {{-- </form> --}}
      </div>
    </div>       
  </div>    
  <br><br>
@endsection