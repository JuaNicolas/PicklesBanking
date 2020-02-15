<?php

use Illuminate\Database\Seeder;
use App\Investment;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investments = [
            [
                'bussiness' => 'Vias Argentinas',
                'share_stock_amount' => 200,
                'unit_value' => 12.23,
                'amount' => 2446,
            ],
            [
                'bussiness' => 'Metrotel',
                'share_stock_amount' => 152,
                'unit_value' => 15.71,
                'amount' => 2387.92,
            ],
            [
                'bussiness' => 'FaySac',
                'share_stock_amount' => 15,
                'unit_value' => 99.51,
                'amount' => 1492.65,
            ],
            [
                'bussiness' => 'GasTrol',
                'share_stock_amount' => 2213,
                'unit_value' => 5.03,
                'amount' => 11131.39,
            ],
            [
                'bussiness' => 'Surrinas',
                'share_stock_amount' => 987,
                'unit_value' => 2.23,
                'amount' => 2201.01,
            ],
            [
                'bussiness' => 'AguasClaras',
                'share_stock_amount' => 154,
                'unit_value' => 35.77,
                'amount' => 5508.58,
            ],
        ];

        foreach ($investments as $inv) {
            Investment::create(array(
                'bussiness' => $inv['bussiness'],
                'share_stock_amount' => $inv['share_stock_amount'],
                'unit_value' => $inv['unit_value'],
                'amount' => $inv['amount'],
            ));
        }
    }
}
