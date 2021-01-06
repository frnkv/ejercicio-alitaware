<?php

namespace Database\Seeders;

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
        $this->call(ServicesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(SubscriptionsSeeder::class);
        $this->call(TeamsAmountsSeeder::class);
    }
}
