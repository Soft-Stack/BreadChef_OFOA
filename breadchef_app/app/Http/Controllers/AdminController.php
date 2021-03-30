<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Customer;
use App\Cart;
use App\Order;
use App\Transformers\CartTransformer;
use App\Transformers\OrderTransformer;

use Log;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod('get')) {
            return view('admin.login');
        }

        if($request->isMethod('post')) {
            Log::debug("In post", $request->all());
            $name = $request->input('name');
            $password = $request->input('password');

            if(Admin::login($name, $password)) {
                return redirect('/breadchef-admin');
            } else {
                return view('admin.login', ['errors' => 'Invalid Credentials']);
            }
        }
    } 

    // /**
    //  */
    // private function formatOrders($orders) {

    //     // print_r($orders;
    //     $formatted = [];

    //     foreach($orders as $order) {
    //         $order_as_array = $order->toArray();

    //         $customer = Customer::where([['id', '=',  $order_as_array['customerid'] ]] )
    //                               ->get()->toArray()[0];

    //         $cart = CartTransformer::transform(Cart::where(['id' => $order_as_array['cartid']])->get()[0]);
    //         // print_r($cart);
    //         $order_as_array['cart'] = $cart;
    //         $order_as_array['customer'] = $customer;
    //         array_push($formatted, $order_as_array);
    //     }
    //     return $formatted;
    // }

    public function orders(Request $request) {
        // return $orders_formatted
        return view('admin.orders');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/breadchef-admin');
    }
}
