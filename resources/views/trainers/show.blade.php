@extends('layouts.app')

@section('title','TrainerInfo')

@section('TrainerInfo')
    <style>
      .sombra {text-shadow: 
        12px 12px 8px #444;
    }
    img {
        filter: drop-shadow(5px 5px 10px #444);
    }
    .sombra {
        box-shadow: 2px 2px 10px #666;
    }
    </style><br>
    <div class="container " aling="center">
        <div class="card sombra" style="width: 62rem;">
            <div class="card-body card-center">
        <img class="mx-auto d-block images card-img-top rounded-circle " style="margin:20px;background-color:#EFEFEF;width:200px; height:200;" src="/images/{{$trainer->avatar}}">    
        <div class="text-center">
            
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p class="card-text">{{$trainer->town}}.</p>
                    <p class="card-text">{{$trainer->type}}.</p>
                    <p class="card-text">{{$trainer->idTrainer}}.</p>
                    <p class="card-text">{{$trainer->description}}.</p>
                </div>
              </div>
                <a href="#" class="btn btn-primary">Personal Dates</a>
            </div>
        </div>
    </div>   


@endsection
