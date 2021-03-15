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

use App\Events\OrderPosted;

class MainController extends Controller
{
    public function placeOrder(Request $request) {
        // TODO: Add validation maybe ?

        //print_r($request->all());
       
        Log::debug("[PlaceOrder] Got Request", $request->all());
        // Log::debug("[PlaceOrder] Got Request", $request->input('name'));
        $customerAsArray = CustomerTransformer::fromRequest($request);
        $cartAsArray = CartTransformer::fromRequest($request);
        $orderAsArray = OrderTransformer::fromRequest($request);

        Log::debug("[PlaceOrder] Customer as array ", $customerAsArray);
        Log::debug("[PlaceOrder] Cart as array ", $cartAsArray);
        Log::debug("[PlaceOrder] Order as array ", $orderAsArray);

        $customer = Customer::checkAndAdd($customerAsArray);
        $customer_id = $customer->id;
        Log::debug('[PlaceOrder] CustomerId '. (string) $customer_id);

        $cart = Cart::create($cartAsArray);
        Log::debug('[PlaceOrder] Cart '. $cart);
        $cart_id = Cart::latest()->first()->id;

        // $datetime = explode(' ',Date('Y-m-d', strtotime('today')))[0];
        // $datetime = Date("Y-m-d h:m:s", strtotime('today'));

        $orderAsArray['customerid'] = $customer_id;        
        $orderAsArray['cartid'] = $cart_id;
        $orderAsArray['datetime'] = $request->input('datetime');
        $orderAsArray['status'] = 'In Progress';

        Log::debug('[Place Order] creating order', $orderAsArray);

        $order = Order::create($orderAsArray);

        OrderPosted::dispatch($order, $cart, $customer);

        // return response(['status' => 'success'], 200);
        return redirect('/feedback');
    }
}
