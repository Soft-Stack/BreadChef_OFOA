<?php

namespace App\Transformers;

use App\Customer;
use Illuminate\Http\Request;
use Log;

class CustomerTransformer {

    public static function fromRequest(Request $request) {
        Log::debug('CustTrns : ', $request->all());
        return [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address')
        ];
    }

    public static function transform(Customer $customer) {
        return [
            'name' => $customer->name,
            'phone' => $customer->phone,
            'email' => $customer->email,
            'address' => $customer->address,
            'orders' => $customer->orders
        ];
    }
}