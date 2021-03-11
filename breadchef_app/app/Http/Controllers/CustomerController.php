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
        $item = array(
            'name' => '',
            'quantity' => 0,
            'price' => 0,
        );

        $bag = array();
        $bag = [
            array(
                'name' => 'Crunch Sandwich', 
                'quantity' => 1, 
                'price' => 595),
            array(
                'name' => 'Special Zinger Burger', 
                'quantity' => 1, 
                'price' => 490),
        ];

        $subTotal = 0;
        
        session(['session_item' => $item]);
        session(['session_bag' => $bag]);
        session(['session_subtotal' => $subTotal]);

        //redirect to website(view)
        $this->setCustomerSessionData();
        return view('website.items', $this->getCustomerSessionData());
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
     * Get Customer data for current user
     */
    public function getCustomerSessionData()
    {
        return $data = [
            'session_bag' => session('session_bag'),
            'session_subtotal' => session('session_subtotal'),
        ];
    }

    /**
     * Set Customer data in current user
     */
    public function setCustomerSessionData()
    {
        $inputBag = array();
        $inputBag = [
            array(
                'name' => 'Maza ka Sandwich', 
                'quantity' => 1, 
                'price' => 595),
            array(
                'name' => 'ESpecial Zinger Burger', 
                'quantity' => 2, 
                'price' => 500),
            array(
                'name' => 'Fish Burger', 
                'quantity' => 1, 
                'price' => 550),
        ];
        // $bag = array();
        // foreach($inputBag as $inputItem)
        // {
        //     array_push($bag, $inputItem);
        // }

        // foreach($bag as $item)
        // {
        //     print_r("Item name: ".$item['name']."<br>");

        // }
        session(['session_bag' => $inputBag]);

        $subtotal = 1250;
        session(['session_subtotal' => $subtotal]);

    }

    /**
     * Redirect to Checkout
     */
    public function getCheckoutView()
    {
        return view('website.checkout');
    }
}
