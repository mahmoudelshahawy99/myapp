<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShahawyController extends Controller
{
    public function firstFunc(){
        return view('index');
    }

    public function show($id){
        return "My Id is :" ." ". $id;
    }
}
