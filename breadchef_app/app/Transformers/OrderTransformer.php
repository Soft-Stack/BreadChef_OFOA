<?php

namespace App\Transformers;

use Illuminate\Http\Request;

class OrderTransformer {

    public static function fromRequest(Request $request) {
        return [
            'total-amount' => $request->input('total-amount'),
            // 'comment' => $request->input('comment'),
        ];
    }
}