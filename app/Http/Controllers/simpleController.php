<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class simpleController extends Controller
{
    public function showUserId($id){
        return "entered id is : ".$id;
    }
}
