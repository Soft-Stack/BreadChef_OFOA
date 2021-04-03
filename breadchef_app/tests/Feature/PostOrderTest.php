<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Log;
use DateTime;
use DateInterval;
use DatePeriod;

class PostOrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    private function dates() {
        // returns an array of dates 
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

    public function testPostOrder() {

        /* modifying test to include orders
         * from last week and this week 
         * with a random customer name
         * from a given list of customers
         */

        $customer = ['John', 'Doe', 'Ross', 'Harvey', 'Khan'];
        $prices = ['1000', '1500', '2000', '2250', '2500', '1200'];
        $dates = $this->dates();

        foreach( $dates as $date ) {
            $payload = [
                'email' => 'test@test.com',
                'name' => $customer[array_rand($customer, 1)],
                'phone' => '0321-1234567',
                'address' => "Street # 3, testabad",
                'comments' => '',
                'total-amount' => $prices[array_rand($prices, 1)],
                'datetime' => $date,
                'items' => [
                    'Cake',
                    'Burger'
                ],
                'prices' => [
                    '150',
                    '160',
                ],
                'quantities' => [
                    '1',
                    '1'
                ]
            ];
            $response = $this->post('/order', $payload);
            // Log::debug("[PostOrderTest]", $response);
            // $response->assertStatus(200, "Response is: " . $response->getContent());
            $response->assertRedirect('/feedback');
        }
    }

    public function testPostOrderTwo() {
        $payload = [
            'email' => 'test@test.com',
            'name' => 'test',
            'phone' => '0321-1234567',
            'address' => "Street # 3, testabad",
            'comments' => '',
            // 'total-amount' => '1500',
            'datetime' => "2021-03-15",
            'items' => [
                'Cake',
                'Burger'
            ],
            'prices' => [
                '150',
                '160',
            ],
            'quantities' => [
                '1',
                '1'
            ], 
            'total-amount' => 3000
        ];
        $response = $this->post('/order', $payload);
        // Log::debug("[PostOrderTest]", $response);
        // $response->assertStatus(200, "Response is: " . $response->getContent());
        $response->assertRedirect('/feedback');
    }
}
