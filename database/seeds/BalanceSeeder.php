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
        $balance = [
            [
            'description' => 'Regalo de bienvenida',
            'total' => 30000,
        ],
            [
            'description' => 'Compra inicial de acciones de Vias Argentinas',
            'total' => -2446,
        ],
            [
            'description' => 'Compra inicial de acciones de Metrotel',
            'total' => -2387.92,
        ],
            [
            'description' => 'Compra inicial de acciones de FaySac',
            'total' => -1492.65,
        ],
            [
            'description' => 'Compra inicial de acciones de GasTrol',
            'total' => -11131.39,
        ],
            [
            'description' => 'Compra inicial de acciones de Surrinas',
            'total' => -2201.01,
        ],
            [
            'description' => 'Compra inicial de acciones de AguasClaras',
            'total' => -5508.58,
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
