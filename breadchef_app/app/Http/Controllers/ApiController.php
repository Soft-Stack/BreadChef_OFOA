<?php

namespace App\Http\Controllers;

use DateTime;
use DateInterval;
use DatePeriod;
use App\Customer;
use App\Order;
use App\Http\Controllers\Controller as BaseController;
use App\Transformers\CustomerTransformer;
use App\Transformers\OrderTransformer;
use Illuminate\Http\Request;

class ApiController extends BaseController
{
    /**
     * 
     * @return
     * {
     *  '2021-05-21' => [
     *      'customers' => App\Customer[],
     *      'count' => 2
     *  ],
     *  ,,,
     *  ,,,,
     * }
     * 
     */
    public function getUniqueCustomers() 
    {

        $customers = Customer::all();
        $data = $this->countCustomerByDate($customers);
        $data['total'] = count($customers);

        return $data;
    }

    private function countCustomerByDate($obj) 
    {
        $data = [];

        foreach($obj as $e) {
            $createDate = explode(' ',$e->created_at)[0];
            isset($data[$createDate]) || $data[$createDate] = 0;
            $data[$createDate] ++;
        }

        return $data;
    }
    /**
     * counts object creation w.r.t created at.
     * returns a 
     * @return
     * {
     *  '2021-05-21' => [
     *      'customers' => App\Customer[],
     *      'count' => 2
     *  ],
     *  ,,,
     *  ,,,,
     * }
     */
    private function countByDate($obj) 
    {
        $data = [];

        foreach($obj as $e) {
            $createDate = explode(' ',$e->datetime)[0];
            isset($data[$createDate]) || $data[$createDate] = 0;
            $data[$createDate] ++;
        }

        return $data;
    }

    private function dates() 
    {   // returns an array of dates 
        // including all dates for this
        // and previous week
        // https://www.php.net/manual/en/class.dateperiod.php
        // https://stackoverflow.com/questions/4312439/php-return-all-dates-between-two-dates-in-an-array
        
        $dates = array();
        $begin = new DateTime( Date('Y-m-d', strtotime('previous monday', strtotime('previous monday')) ));
        $end   = new DateTime( Date( 'Y-m-d', strtotime('this sunday') ));
        $end   = $end->modify( '+1 day' );

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval, $end);

        foreach($daterange as $date) { 
            array_push( $dates,  $date->format("Y-m-d") );
        }

        return $dates;
    }

    /**
     * format order object for response payload
     */
    public function formatOrder($orders, $dates) 
    {   
        $data = [];

        foreach($dates as $date) {
            $data[$date] = "0";
        }

        foreach($orders as $order) {
            // print_r($order);
            // echo $order->name.' - '.$order->total_amount.PHP_EOL;
            $createDate = explode(' ',$order->datetime)[0];
            isset($data[$createDate]) || $data[$createDate] = 0;
            $order->total_amount == null || $data[$createDate] = $data[$createDate] + $order->total_amount;
        }

        return $data;
    }

    public function getRevenue() 
    {
        // start of this week, i.e monday
        $sd = Date('Y-m-d', strtotime('previous monday'));
        // start of previous week, i.e last (previous) monday
        $ed = Date('Y-m-d', strtotime('previous monday', strtotime('previous monday')));
        // all orders after (and including) $sd
        $orders_this_week = Order::where([['datetime', '>=', $sd]])->get();
        // all orders after (and including) $ed but before $sd
        $orders_last_week = Order::where([['datetime', '>=', $ed], ['datetime', '<', $sd ]])->get();

        $dates = array_chunk($this->dates(), 7);
        
        $orders_last_week_formatted = $this->formatOrder($orders_last_week, $dates[0]);
        $orders_this_week_formatted = $this->formatOrder($orders_this_week, $dates[1]);

        // dd($orders_this_week_formatted);
        // return $orders_this_week_formatted;

        $data = [];
        $data['this-week'] = $orders_this_week_formatted;
        $data['last-week'] = $orders_last_week_formatted;
        return $data;
    }

    public function getOrdersByWeek() 
    {
        // this weeks monday's date
        $this_monday = Date('Y-m-d', strtotime('previous monday'));
        
        // last weeks monday's date
        $previous_monday = Date('Y-m-d', strtotime('previous monday', strtotime('previous monday')));

        // start date for this month
        $start_month = date('d.m.Y',strtotime('first day of this month'));

        // last date for this month
        $end_month = date('d.m.Y',strtotime('last day of this month'));

        // total orders ever
        $all_orders = Order::all();
        // orders for current week
        // get all orders that were created in this week
        $orders_current = Order::where([['datetime', '>', $this_monday]])->get();
        // orders for last week
        // get all orders that were created before this week
        $orders_previous = Order::where([['datetime', '<', $this_monday]])->get();
        // orders for this month
        // get all orders that were created in this month
        $orders_month = Order::where([['datetime', '>', $start_month], 
                                         ['datetime', '<', $end_month]])->get();

        $data_current = $this->countByDate($orders_current);
        $data_current['total'] = count($orders_current);

        $data_previous = $this->countByDate($orders_previous);
        $data_previous['total'] = count($orders_previous); 
        
        $data_month = $this->countByDate($orders_month);
        $data_month['total'] = count($orders_month); 

        $data_all = $this->countByDate($all_orders);
        $data_all['total'] = count($all_orders);

        $data['current-week'] = $data_current;
        $data['previous_week'] = $data_previous;
        $data['this-month'] = $data_month;
        $data['total-orders'] = $data_all;
 
        return $data;
    }

    public function ordersByDate(Request $request) {
        $date = $request->input('date');        
        $orders = Order::byDate($date); 
        $orders_formatted = OrderTransformer::formatOrders($orders);
        return $orders_formatted;
    }

    public function markStatus(Request $request) {
        // echo $request->input('orderid')." - ".$request->input('status')
        $status = $request->input('status');
        $orderid = $request->input('orderid');
        Order::where('id', $orderid )
               ->update(['status' => $status]);
    }
}
