<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetDeneme extends Controller
{
    function setName($name){
        return "Merhaba $name";
    }

    function setDeneme($name){
        return view('dosya_gonderme',['key'=>$name]);
    }
}
