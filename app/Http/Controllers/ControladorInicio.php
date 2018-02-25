<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class ControladorInicio extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio (){
        $nombre = Input::post('txtnome');
        return $nombre;
    }
}
