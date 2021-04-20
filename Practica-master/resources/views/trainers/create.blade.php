@extends('layouts.app')

@section('title','Trainers Create')

@section('content')
  
    <h1>Titulo</h1>
    <form class="form form-group" method="POST" action="/trainers" >
      @csrf()
      <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control">
      </div>
      <button type="submit" class="btn btn-outline-primary">Guardar</button>
    </form>
    
  
@endsection