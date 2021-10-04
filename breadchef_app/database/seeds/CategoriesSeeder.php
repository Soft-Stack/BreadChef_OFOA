<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Appetizers'
            ], 
            [
                'name' => 'Soup'
            ],
            [
                'name' => 'Salad'
            ],
            [
                'name' => 'Sandwhiches'
            ],
            [
                'name' => 'Burgers'
            ],
            [
                'name' => 'Special Chicken'
            ],
            [
                'name' => 'Flavor Loaded Steaks'
            ],
            [
                'name' => 'Italian Affairs'
            ],
            [
                'name' => 'Grand Mexico'
            ],
            [
                'name' => 'Wok-a-meal'
            ],
            [
                'name' => 'From Ocean'
            ],
            [
                'name' => 'Pizza Size 9'
            ],
            [
                'name' => 'Dessert'
            ],
            [
                'name' => 'Italian Gelato'
            ]
            
        ];

        foreach($categories as $cat) {
            DB::table('categories')->insert($cat);
        } 
    }
}
