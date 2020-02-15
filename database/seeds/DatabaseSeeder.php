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

        $this->call(ServiceSeeder::class);
        $this->call(InvestmentSeeder::class);
        $this->call(BalanceSeeder::class);
    }
}
