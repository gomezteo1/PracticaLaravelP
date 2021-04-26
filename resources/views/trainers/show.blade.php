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
        .links > a {
                color: #b6c2c9;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
    </style>
        

    <br>
    <div class="container " aling="center">
        <div class="card sombra" style="width: 62rem;">
            <div class="card-body card-center">
             @if(session('Status'))
                <div class="alert alert-success">{{session('Status')}} </div>
            @endif
                <div class="class"  style="background-color:#F0F8FF;">
                    <a class="links letra btn">PERSONAL DATA</a>
                </div>
                <img class="mx-auto d-block images card-img-top rounded-circle " style="margin:20px;background-color:#EFEFEF;width:200px; height:200;" src="/images/{{$trainer->avatar}}">    
                <div class="text-center">
                    <h1 class="card-title"> {{$trainer->name}}</h1>
                    <p class="card-text"><span class="text-left"><h5>TOWN</h5></span>{{$trainer->town}}.</p>
                    <p class="card-text"><span class="text-left"><h5>TYPE</h5></span>{{$trainer->type}}.</p>
                    <p class="card-text"><span class="text-left"><h5>IDTRAINER</h5></span>{{$trainer->idTrainer}}.</p>
                    <p class="card-text"><span class="text-left"><h5>DESCRIPTION</h5></span>{{$trainer->description}}.</p>
                </div>
                <div class="" style="background-color:#E6E6FA;">
                       <a class="col-1 button4 btn btn-outline-secondary"  href="/trainers/{{$trainer->slug}}/edit">Edit</a>
                        {!!Form::open(['route'=>['trainers.destroy', $trainer->slug], 'method'=>'DELETE' ]) !!}
                            {!!Form::submit('Delete',['class'=>'col-1 btn btn-outline-secondary']) !!}
                        {!!Form::close() !!}
                </div> 
            </div>
        </div>       
    </div>    
    <br><br>
@endsection
