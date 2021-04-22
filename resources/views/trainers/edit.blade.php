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
        <form class="form form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf()
       
        <img class="mx-auto d-block images card-img-top rounded-circle " style="margin:20px;background-color:#EFEFEF;width:200px; height:200;" src="/images/{{$trainer->avatar}}">    
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" value="{{$trainer->name}}" name="name" class="form-control">
            <label for="">Town</label>
            <input type="text" value="{{$trainer->town}}" name="town" class="form-control">
            <label for="">Type</label>
            <input type="text" value="{{$trainer->type}}" name="type" class="form-control">
            <label for="">IDTrainer</label>
            <input type="number" value="{{$trainer->idTrainer}}" name="idTrainer" class="form-control">
            <label for="">Description</label>
            <input type="textarea" value="{{$trainer->description}}" name="description" class="form-control">
            <label for="">Avatar</label>
            <br>
            <input type="file" name="avatar">
          </div>
          <button type="submit" class="btn btn-outline-primary">SAVE</button>
        </form>
      </div>
    </div>       
  </div>    
  <br><br>
@endsection