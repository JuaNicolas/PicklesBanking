<?php

use App\Balance;
use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $balance = [[
            'description' => 'Regalo de bienvenida',
            'total' => 25000,
        ],
        ];

        foreach ($balance as $bal) {
            Balance::create(array(
                'description' => $bal['description'],
                'total' => $bal['total'],
            ));
        }
    }
}
