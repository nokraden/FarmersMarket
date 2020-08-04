<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Order;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($market_id)
    {
        //Get the products at the selected market
        $marketInfo = Market::with('products')->get()->find($market_id);
        //Return the list to the marketView blade
        return view('marketView', compact('marketInfo', $marketInfo));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store item in session cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {

        //Setup default variable. Possibly auto filled later
        $request->request->add(['user_id' => 1]);
        $request->request->add(['invoiced' => 'N']);

        $cart = session()->get('cart');
        $id = $request->product_id;
        
        //$cart = '';
        //session()->put('cart', $cart);

        //Check if this is the first item
        if(!$cart) {
            //Add item to cart
            $cart = [
                $id => [
                    "user_id" => $request->user_id,
                    "product_id" => $request->product_id,
                    "event_id" => $request->event_id,
                    "quantity" => $request->quantity,
                    "price" => $request->price,
                    "invoiced" => $request->invoiced,
                    "image" => $request->image,
                    "name" => $request->name
                ]
            ];

            session()->put('cart', $cart);

            return redirect('/markets/view/' . $request->event_id)->with('success', 'Product added to cart');
        }

        //Check to see if the product is already in the cart
        if(isset($cart[$id])) {

            if($request->state == 'add') {
                //It is so just add the new uantity to the old
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;
            } else if($request->state == 'update' && $request->quantity == 0) {
                //dd('delete');
                unset($cart[$request->product_id]);
            } else if($request->state == 'update') {
                $cart[$id]['quantity'] = $request->quantity;
            }

            //Push the cart back to the session
            session()->put('cart', $cart);

            //Return to the market page
            return redirect('/markets/view/' . $request->event_id)->with('success', 'Product added to cart');
        }

        //Only other condition is the it is not in the non empty cart so add it
        $cart[$id] = [
            "user_id" => $request->user_id,
            "product_id" => $request->product_id,
            "event_id" => $request->event_id,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "invoiced" => $request->invoiced,
            "image" => $request->image,
            "name" => $request->name
        ];

        //Write to the cart
        session()->put('cart', $cart);

        //Return to the market page
        return redirect('/markets/view/' . $request->event_id)->with('success', 'Product added to cart');

        //Order::create($request->all());
    }

    public function submitOrder(Request $request)
    {
        //Get the isers cart
        $cart = session()->get('cart');

        dd($cart);

    }

    public function cart()
    {
        return view('cart');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
