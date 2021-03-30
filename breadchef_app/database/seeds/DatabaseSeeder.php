<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(VariationsSeeder::class);
    }
}
