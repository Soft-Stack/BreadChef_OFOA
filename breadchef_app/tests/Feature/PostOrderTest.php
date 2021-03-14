<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Log;

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

    public function testPostOrder() {
        $payload = [
            'email' => 'test@test.com',
            'name' => 'test',
            'phone' => '0321-1234567',
            'address' => "Street # 3, testabad",
            'comments' => '',
            'total-amount' => '1500',
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
        $response->assertStatus(200, "Response is: " . $response->getContent());
    }

    public function testPostOrderTwo() {
        $payload = [
            'email' => 'test@test.com',
            'name' => 'test',
            'phone' => '0321-1234567',
            'address' => "Street # 3, testabad",
            'comments' => '',
            // 'total-amount' => '1500',
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
        $response->assertStatus(200, "Response is: " . $response->getContent());
    }
}
