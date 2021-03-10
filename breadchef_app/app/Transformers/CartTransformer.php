<?php

namespace App\Transformers;

use Illuminate\Http\Request;

class CartTransformer {

    public static function fromRequest(Request $request) {

        return [
            'items' => implode(';', $request->input('items')),
            'quantities' => implode(';', $request->input('quantities')),
            'prices' => implode(';', $request->input('prices'))
        ];
    }
}