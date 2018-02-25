<?php

namespace App\Http\Controllers;

class ControladorInicio extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio (){
        $nom=$this->post('txtnome');
        return "Fernando";
    }
}
