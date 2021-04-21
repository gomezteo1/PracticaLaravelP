@extends('layouts.app')

@section('title','Trainers-Create')

@section('TrainerCreate')
  
    <h1>Titulo</h1>
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
      <button type="submit" class="btn btn-outline-primary">Guardar</button>
    </form>
@endsection