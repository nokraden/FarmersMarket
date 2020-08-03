<?php

namespace App\Http\Controllers;

use App\Models\Market;

class ListProducts extends Controller
{
    
    public function __invoke($market_id){
        //Get the products at the selected market
        $marketInfo = Market::with('products')->get()->find($market_id);
        //Return the list to the marketView blade
        return view('marketView', compact('marketInfo', $marketInfo));
    }

    public function addToCart() {
        
        //user_id
        //event_id
        //product_id
        //quantity
        //price
        //invoiced
		
		return redirect('/markets/view/1')->with('success', 'Added to cart');
    }
}
