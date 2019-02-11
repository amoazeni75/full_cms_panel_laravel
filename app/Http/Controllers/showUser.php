<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class showUser extends Controller
{
    public function profile($id, $name){
        return view('profileView',['userID' => $id, 'username' => $name]);
    }
}
