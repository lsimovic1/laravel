<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
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
        User::truncate();
        Customer::truncate();
        Order::truncate();
        Product::truncate();

        User::factory(5)
            ->has(Customer::factory(3)
                ->has(Order::factory(3)
                    ->has(Product::factory(4))))
            ->create();
    }
}
