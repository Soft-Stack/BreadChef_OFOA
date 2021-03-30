<?php

use Illuminate\Database\Seeder;

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
                'name' => 'Sandwhiches'
            ],
            [
                'name' => 'Flavor Loaded Steaks'
            ]
        ];

        foreach($categories as $cat) {
            DB::table('categories')->insert($cat);
        } 
    }
}
