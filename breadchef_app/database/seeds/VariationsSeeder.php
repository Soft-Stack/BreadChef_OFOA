<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variations = [
            [
                'itemid' => '23', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '595' // price
            ],
            [
                'itemid' =>'23', // itemid 
                'name' =>  'beef', // variation name
                'price' => '595' // price
            ],
            [
                'itemid' =>'37', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'37', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'38', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'38', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'39', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'39', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'40', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'40', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'41', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'41', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'42', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'42', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'43', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'43', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'44', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'44', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'45', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'45', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'46', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'46', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
            [
                'itemid' =>'47', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '899' // price
            ],
            [
                'itemid' =>'47', // itemid 
                'name' =>  'beef', // variation name
                'price' => '990' // price
            ],
        ];

        foreach($variations as $variation) {
            DB::table('variations')->insert($variation);
        }
    }
}
