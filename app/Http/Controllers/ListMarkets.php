<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Market;

class ListMarkets extends Controller
{
    public function __invoke(){
        $markets = Market::all();

        return view('markets')->with('markets', $markets);
    }

}
