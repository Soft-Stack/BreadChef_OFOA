<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function index()
    {
        /* create session variables here
        * 1) array type of bag/cart,
        *       this array will store items(name, quantity, price)
        * 2) array type of bag,
        *       this array will store all items 
        * 3) subtotal price
        */
        
        return view('website.items');
    }


    /**
     * Print Customer data for current user
     */
    public function printSessionData()
    {
       foreach(session('session_bag') as $item)
       {
            print_r("Item name: ".$item['name']."<br>");
            print_r("Item quantity: ".$item['quantity']."<br>");
            print_r("Item price: ".$item['price']."<br>");
            print_r("<br>");
       }

       print_r("Subtotal: ".session('session_subtotal'));
    }


    /**
     * Redirect to Checkout
     */
    public function proceedToCheckout()
    {
        
    }

    public function getCheckoutView()
    {
        return view('/website.checkout');
    }
}
