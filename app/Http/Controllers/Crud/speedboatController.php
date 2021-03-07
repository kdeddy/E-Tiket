<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class speedboatController extends Controller
{
    //
     public function view(){
    	return view('Crud.speedboatView');
    }

    public function create(){
        return view('Crud.createSpeedboat');
    }
}
