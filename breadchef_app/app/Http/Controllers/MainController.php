<?php

namespace App\Http\Controllers;

use Log;
use Datetime;
use Illuminate\Http\Request;

use App\Cart;
use App\Customer;
use App\Order;
use App\Category;
use App\Item;
use App\Variation;
use App\Transformers\CartTransformer;
use App\Transformers\CustomerTransformer;
use App\Transformers\OrderTransformer;

use App\Events\OrderPosted;

class MainController extends Controller
{

    /**
     * Redirects to items view
     * return categories array, items array, variations array
     */
    public function getItemsView()
    {
        $data = [
            'categories' => $this->getAllCategories(),
            'items' => $this->getAllItems(),
            'variations' => $this->getAllVariations(),
        ];

        return view('website.items', $data);
    }

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
        $datetime = Date("Y-m-d h:m:s", strtotime('today'));

        $orderAsArray['customerid'] = $customer_id;        
        $orderAsArray['cartid'] = $cart_id;
        $orderAsArray['datetime'] = $datetime;
        $orderAsArray['status'] = 'In Progress';

        Log::debug('[Place Order] creating order', $orderAsArray);

        $order = Order::create($orderAsArray);

        OrderPosted::dispatch($order, $cart, $customer);

        // return response(['status' => 'success'], 200);
        return redirect('/feedback');
    }

    /**
     * Get All category names from the database and send it to a view
     */
    public function getAllCategories()
    {
        $categories = Category::all();
        return $categories;
    }

    public function getAllItems()
    {
        $items = Item::all();
        return $items;
    }

    public function getAllVariations()
    {
        $variations = Variation::all();
        return $variations;
    }
}
