@extends('layouts.app')

@section('title','TrainersList')
@section('Trainerlist')
<link href="{{ asset('style/styleTrainer.css') }}" rel="stylesheet">

  
   
    <br>
    <style>
        .sombra {text-shadow: 
          12px 12px 8px #444;
      }
     
      .sombra {
          box-shadow: 2px 2px 10px #666;
      }
      </style><br>
    <div class="row">
        <h1 aling="center">Titulo</h1>
        
        @foreach ($trainers as $trainer)
            <div class=" col-sm-3 col-3">
                <div class="sombra card text-center" style="width: 18rem; margin-top:50px;" >
                    <div class="card-body">
                    <img class="mx-auto display-block images card-img-top rounded-circle " style="margin:25px;background-color:#EFEFEF;width:100px; height:100px;" src="/images/{{$trainer->avatar}}">    
                    <h2 class="card-title">{{$trainer->name}}</h2>
                    <p class="card-text">{{$trainer->description}}.</p>
                    <a href="/trainers/{{$trainer->id}}" class="btn btn-primary">See More...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-1"></div>
        @endforeach
    </div>

@endsection