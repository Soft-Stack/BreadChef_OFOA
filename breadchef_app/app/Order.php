<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    // use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Fields fillable by student
     * 
     * @var array
     */
    protected $fillable = ['customerid', 'cartid', 'datetime', 'total_amount', 'status'];


    /**
     * Get the cart associated with this order.
     */
    public function cart() {
        return $this->hasOne('App\Cart');
    }

   /**
     * Get the customer associated with this order.
     */
    public function customer() {
        return $this->hasOne('App\Customer');
    }

    /**
     * @param string date | assuimg format : 2021-03-15
     */
    public static function byDate($date) {

        if($date == "") {
            abort(404, "No Date");
        }
        $orders = Order::all();
        $ordersByDate = [];
        foreach($orders as $order) {
            $orderDate = explode(' ', $order->datetime)[0];
            if($date == $orderDate) {
                array_push($ordersByDate, $order);
            }
        }
        return $ordersByDate;
    } 
}
