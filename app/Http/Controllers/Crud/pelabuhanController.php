<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pelabuhanController extends Controller
{
    //
    public function index(){
    	return view('Page.Pelabuhan');
    }

    public function contact(){
    	return view('Page.pelabuhanContact');
    }

}
