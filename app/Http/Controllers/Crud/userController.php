<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    //
     public function viewcustomer(){
    	return view('Crud.userCustomer');
    }

    public function viewdirektur(){
    	return view('Crud.userDirektur');
    }

    public function viewadmin(){
    	return view('Crud.userAdmin');
    }

    public function viewsuperadmin(){
    	return view('Crud.userSuperAdmin');
    }

    public function create(){
        return view('Crud.createUser');
    }
}
