<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Trainer;
use App\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{   
    public function index(Request $request){   

        $request->user()->authorizeRoles(['admin','user']);

        //....
        $trainers = Trainer::all();
        return view("trainers.index",compact('trainers'));
    }
    public function create(){
        return view('trainers.create');
    }
    public function store(StoreTrainerRequest $request){  
        if($request->hasFile('avatar')){ //preguntamos si existe el archivo
            $file = $request->file('avatar'); //le damos un nombre al archivo
            $namePhoto = time().$file->getClientOriginalName(); //concatenamos el tiempo y el archivo 
            $file->move(public_path().'/images/',$namePhoto); //movemos el archivo a la carpeta con el name
            $trainer = new Trainer();
            $trainer->name = $request->input('name');
            $trainer->town = $request->input('town');
            $trainer->avatar = $namePhoto;  
            $trainer->slug = $trainer->name;
            $trainer->idTrainer = $request->input('idTrainer');
            $trainer->type = $request->input('type');
            $trainer->description =$request->input('description');  
            $trainer->save();
        }else{
            $trainer = new Trainer();
            $trainer->name = $request->input('name');
            $trainer->town = $request->input('town');
            $trainer->avatar = 'no tiene';  
            $trainer->slug = $trainer->name;
            $trainer->idTrainer = $request->input('idTrainer');
            $trainer->type = $request->input('type');
            $trainer->description =$request->input('description');  
            $trainer->save();
        }
        // $color = 'alert alert-succes';
        $trainers= Trainer::all();
        return redirect()->route("trainers.index", [$trainer])->with('Status','Trainer Create Correctly');

        // ->with('color',$color);
    }
    public function show(Trainer $trainer){   
        return view('trainers.show',compact('trainer'));
    }
    public function edit(Trainer $trainer){
        return view('trainers.edit',compact('trainer'));

    }
    public function update(Request $request, Trainer $trainer){
        if($request->hasFile('avatar')){ //preguntamos si existe el archivo
            $file = $request->file('avatar'); //le damos un nombre al archivo
            $name = time().$file->getClientOriginalName(); //concatenamos el tiempo y el archivo 
            $file->move(public_path().'/images/',$name); //movemos el archivo a la carpeta con el name
            $trainer->fill($request->all());
            $trainer->slug = $trainer->name;
            $trainer->avatar = $name;  
            $trainer->save();
        }else{
            $trainer->fill($request->all());
            $trainer->save();
        }
        $color = 'alert alert-succes';
        return redirect()->route("trainers.show", [$trainer])->with('Status','Trainer Update Correctly');
        // ->with('color',$color);

    }
    public function destroy(Trainer $trainer){
        $file_path = public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
        $trainer->delete();
        $color = 'alert alert-warning'; 
        return redirect()->route("trainers.index")->with('Status','Trainer Delete Correctly');
        // ->compact('color',$color);
    }
}



