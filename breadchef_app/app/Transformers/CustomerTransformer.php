<?php

namespace App\Transformers;

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
}