<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller{

    public function index(){
        echo "HELLO WORLD";
    }
    public function index2()
    {

        return view('coba');
    }

}
