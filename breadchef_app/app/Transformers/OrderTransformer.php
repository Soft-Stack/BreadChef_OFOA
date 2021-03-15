<?php

namespace App\Transformers;

use App\Customer;
use App\Cart;
use Illuminate\Http\Request;

class OrderTransformer {

    public static function fromRequest(Request $request) {
        return [
            'total_amount' => $request->input('total-amount'),
            'comment' => $request->input('comments') == null ? " - " : $request->input('comments') ,
        ];
    }

     /**
     */
    public static function formatOrders($orders) {

        // print_r($orders;
        $formatted = [];

        foreach($orders as $order) {
            array_push($formatted, OrderTransformer::formatOrder($order));
        }
        return $formatted;
    }

     /**
     */
    public static function formatOrder($order) {

        // print_r($orders;
        // $formatted = [];

        $order_as_array = $order->toArray();

        $customer = Customer::where([['id', '=',  $order_as_array['customerid'] ]] )
                                ->get()->toArray()[0];

        $cart = CartTransformer::transform(Cart::where(['id' => $order_as_array['cartid']])->get()[0]);
        // print_r($cart);
        $order_as_array['cart'] = $cart;
        $order_as_array['customer'] = $customer;
        // array_push($formatted, $order_as_array);

        return $order_as_array;
    }

}