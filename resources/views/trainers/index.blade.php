@extends('layouts.app')
@section('title','TrainersList')
@section('Trainerlist')
    <style>
        .button4 {background-color: #e7e7e7; color: black;}
        .s1 {text-shadow: 
            12px 12px 8px #444;
        }
        .s2 {
            box-shadow: 2px 2px 10px #666;
        }
    </style>
    <br>
    <h1 class="s1" >Trainers</h1>
    <div class="row">
        @foreach ($trainers as $trainer)
            <div class=" col-sm-3 col-3">
                <div class="s1 s2 card text-center" style="width: 18rem; margin-top:50px;" >
                    <div class="card-body">
                    <img class="mx-auto display-block images card-img-top rounded-circle " style="margin:25px;background-color:#EFEFEF;width:100px; height:100px;" src="/images/{{$trainer->avatar}}">    
                    <h2 class="card-title">{{$trainer->name}}</h2>
                    <p class="card-text">{{$trainer->description}}.</p>
                    <a href="/trainers/{{$trainer->slug}}" class="button4 btn btn-secondary">See More...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-1"></div>
        @endforeach
    </div>

@endsection