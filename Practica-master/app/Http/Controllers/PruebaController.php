<?php

namespace App\Http\Controllers;

//creación de la clase que hereda del controlador padre
// se especifica que el archivo controller que se encuentra

use App\Http\Controllers\Controller;

class PruebaController extends Controller {
    
    public function prueba($param){
        return 'llego al controlador y su'. $param;
    
    }

}

?>
