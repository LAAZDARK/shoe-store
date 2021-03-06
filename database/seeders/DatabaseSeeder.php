<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
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
        Product::truncate();
        User::truncate();
        Admin::truncate();

        Admin::factory(10)->create();
        Product::factory(20)->create();
        User::factory(20)->create();
    }
}
