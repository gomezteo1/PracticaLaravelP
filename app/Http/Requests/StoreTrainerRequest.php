<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreTrainerRequest extends FormRequest
{

    public function authorize(){
        return true;
    }
    
    public function rules(){
        return [
            'name'=>'required||max: 20||min: 3',
            'town'=>'required||max: 20||min: 5',
            'avatar'=>'required||image',
            'idTrainer'=>'required||max: 10||min: 4',
            'type'=>'required||max: 10||min: 3',
            'description'=>'required||max: 50||min: 10',
        ];
    }
}
