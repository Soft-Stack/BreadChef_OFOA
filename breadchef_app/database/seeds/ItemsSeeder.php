<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Nachos', // name
                'description' => 'nachos description', // description
                'image'   =>     'items/appetizers/nachos.jpeg',
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Nachos 1', // name
                'image'   =>     'items/appetizers/nachos.jpeg',
                'description' => 'nachos 1 description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Garlic Bread', // name
                'image'   =>     'items/appetizers/Buffalo-Wings.jpg',

                'description' => 'GB description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'Naandos', // name
                'description' => 'nachos 1 description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '1', // categoryid
                'name' =>        'lala 2', // name
                'description' => 'nachos 2 description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        'Not Nachos', // name
                'description' => 'nachos description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        'Not Nachos', // name
                'description' => 'nachos description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        'Not Nachos', // name
                'description' => 'nachos description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        'Not Nachos', // name
                'description' => 'nachos description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        'Not Nachos', // name
                'description' => 'nachos description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '2', // categoryid
                'name' =>        'Not Nachos', // name
                'description' => 'nachos description', // description
                'price' =>       '200' // size
            ], 
            [
                'categoryid' =>  '3', // categoryid
                'name' =>        'Steak', // name
                'description' => 'steak description', // description
                'price' =>       '200' // size
            ]
        ];

        foreach($items as $item) {
            DB::table('items')->insert($item);
        }
    }
}
