<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payload = [
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-01 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-01 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-01 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-02 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-03 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-03 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-03 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-04 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-05 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-05 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-06 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-06 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-07 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-07 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-09 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-09 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-10 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-10 22:25:20',
                'status' => "In Progress",
                'total_amount' => "1500"
            ],
            [
                'customerid' => 1,
                'cartid' => 1,
                'datetime' => '2021-03-11 22:25:20',
                'status' => "In Progress",
                'total_amount' => "500"
            ],
        ];

        foreach($payload as $order) {
            DB::table('orders')->insert($order);
        }
    }
}
