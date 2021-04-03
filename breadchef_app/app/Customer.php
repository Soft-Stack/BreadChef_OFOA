<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';
    
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
    protected $fillable = ['name', 'email', 'phone', 'address', 'orders'];

    /**
     * A customer is unique if any
     * of the following fields differ
     *  
     */
    public static function isUnique(array $customer) {
        Log::debug($customer);
        $result = Customer::where([
            'name' => $customer['name'],
            'email' => $customer['email'],
            'phone' => $customer['phone'],
            'address' => $customer['address'],
        ])->get();
        
        return count($result) == 0;
    }


    /**
     * Checks whether customer is new,
     * returns customer
     * @param array customer As Array
     * @return App\Customer customer
     */
    public static function checkAndAdd(array $customerAsArray) {
        if(Customer::isUnique($customerAsArray)) {
            // is customer is unique, make entry in DB
            Log::debug("Customer is unique : ".$customerAsArray['name']);

            $cust =  Customer::create($customerAsArray);
            // $newCustomerId = Customer::latest()->first()->id;
            return $cust;
        } else {
            // return customer_id for already existing customer
            Log::debug("Customer is not unique : ".$customerAsArray['name']);
            $existingCustomer = Customer::where([
                'name' => $customerAsArray['name'],
                'email' => $customerAsArray['email'],
                'phone' => $customerAsArray['phone'],
                'address' => $customerAsArray['address'],
            ])->get()->first();

            $existingCustomerId = $existingCustomer->id;
            $existingCustomerOrders = (int) $existingCustomer->orders;
            $updatedOrders = $existingCustomerOrders + 1;
            Customer::where( ['id' => $existingCustomerId] )->update(['orders' => (string)$updatedOrders]);
            return $existingCustomer;
        }
    }
}
