<?php

namespace App\Http\Controllers;

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
        $data = $this->countByDate($customers);
        $data['total'] = count($customers);

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

    /**
     * format order object for response payload
     */
    public function formatOrder($orders) 
    {
        
        $data = [];

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

        $orders_this_week_formatted = $this->formatOrder($orders_this_week);
        $orders_last_week_formatted = $this->formatOrder($orders_last_week);

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
}
