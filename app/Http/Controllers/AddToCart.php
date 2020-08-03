<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class AddToCart extends Controller
{
    
    public function __invoke(Request $request){

        return view('test')->with('test', $request);

    }
}
