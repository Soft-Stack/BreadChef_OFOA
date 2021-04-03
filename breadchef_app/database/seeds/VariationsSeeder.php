<?php

use Illuminate\Database\Seeder;

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
                'itemid' => '7', // itemid 
                'name' =>  'chicken', // variation name
                'price' => '599' // price
            ],
            [
                'itemid' =>'7', // itemid 
                'name' =>  'beef', // variation name
                'price' => '899' // price
            ],
        ];

        foreach($variations as $variation) {
            DB::table('variations')->insert($variation);
        }
    }
}
