<?php

namespace App\Http\Controllers;

use Log;
use Datetime;
use Illuminate\Http\Request;

use App\Cart;
use App\Customer;
use App\Order;
use App\Transformers\CartTransformer;
use App\Transformers\CustomerTransformer;
use App\Transformers\OrderTransformer;


class MainController extends Controller
{
    public function placeOrder(Request $request) {
        // TODO: Add validation maybe ?
       
        Log::debug("[PlaceOrder] Got Request", $request->all());
        // Log::debug("[PlaceOrder] Got Request", $request->input('name'));
        $customerAsArray = CustomerTransformer::fromRequest($request);
        $cartAsArray = CartTransformer::fromRequest($request);
        $orderAsArray = OrderTransformer::fromRequest($request);

        Log::debug("[PlaceOrder] Customer as array ", $customerAsArray);
        Log::debug("[PlaceOrder] Cart as array ", $cartAsArray);
        Log::debug("[PlaceOrder] Order as array ", $orderAsArray);

        $customer_id = Customer::checkAndAdd($customerAsArray);
        Log::debug('[PlaceOrder] CustomerId '. (string) $customer_id);
        $cart = Cart::create($cartAsArray);
        Log::debug('[PlaceOrder] Cart '. $cart);
        $cart_id = Cart::latest()->first()->id;

        $datetime = new DateTime('NOW');


        $orderAsArray['customerid'] = $customer_id;        
        $orderAsArray['cartid'] = $cart_id;
        $orderAsArray['datetime'] = $datetime;
        $orderAsArray['status'] = 'In Progress';

        Order::create($orderAsArray);
        return response(['status' => 'success'], 200);
    }
}
