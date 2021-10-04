<?php

namespace App\Transformers;

use App\Cart;
use Illuminate\Http\Request;

class CartTransformer {

    public static function fromRequest(Request $request) 
    {
        return [
            'items' => implode(';', $request->input('items')),
            'quantities' => implode(';', $request->input('quantities')),
            'prices' => implode(';', $request->input('prices'))
        ];
    }

    public static function transform(Cart $cart) 
    {
        $items = explode(';',$cart['items']);
        $prices = explode(';',$cart['prices']);
        $quantities = explode(';',$cart['quantities']);
        $newCart = [];
        for($i = 0; $i < count($items); $i++) { 
            $temp = []; array_push($temp, $items[$i]); 
            array_push($temp, $quantities[$i]); 
            array_push($temp, $prices[$i]); 
            array_push($newCart, $temp); 
        }
        return $newCart;
    }
}