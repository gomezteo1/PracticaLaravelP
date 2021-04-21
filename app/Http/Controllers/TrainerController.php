<?php

    namespace App\Http\Controllers;
    use App\Trainer;
    use Illuminate\Http\Request;
    class TrainerController extends Controller
    {
        public function index()
        {   
            $trainers= Trainer::all();
            return view("trainers.index",compact('trainers'));
        }
        public function create(){
            return view('trainers.create');
        }
        public function store(Request $request){   
            
            if($request->hasFile('avatar')){ //preguntamos si existe el archivo
                $file = $request->file('avatar'); //le damos un nombre al archivo
                $name = time().$file->getClientOriginalName(); //concatenamos el tiempo y el archivo 
                $file->move(public_path().'/images/',$name); //movemos el archivo a la carpeta con el name
            }
            $trainer = new Trainer();
            $trainer->name = $request->input('nombre');
            $trainer->town = $request->input('town');
            $trainer->avatar = $name;  
            $trainer->slug = $trainer->name;
            $trainer->idTrainer = $request->input('idTrainer');
            $trainer->type = $request->input('type');
            $trainer->description =$request->input('description');  
            $trainer->save();

            return 'Saved';
        }
        public function show(Trainer $trainer)
        {   
            return view('trainers.show',compact('trainer'));
        }
        public function edit($id)
        {
            //
        }
        public function update(Request $request, $id)
        {
            //
        }
        public function destroy($id)
        {
            //
        }
    }
