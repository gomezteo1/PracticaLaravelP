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
        <form class="form form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf()
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="nombre" class="form-control">
            <label for="">Town</label>
            <input type="text" name="town" class="form-control">
            <label for="">Type</label>
            <input type="text" name="type" class="form-control">
            <label for="">IDTrainer</label>
            <input type="number" name="idTrainer" class="form-control">
            <label for="">Description</label>
            <input type="textarea" name="description" class="form-control">
            <label for="">Avatar</label>
            <br>
            <input type="file" name="avatar" class="">
          </div>
          <button type="submit" class="btn btn-outline-primary">SAVE</button>
        </form>
      </div>
    </div>       
  </div>    
  <br><br>
@endsection