<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'service_name' => 'Aysa',
                'reference_number' => 3454,
            ],
            [
                'service_name' => 'MetroSud',
                'reference_number' => 1267,
            ],
            [
                'service_name' => 'Petrol',
                'reference_number' => 8754,
            ],
        ];

        foreach ($services as $serv) {
            Service::create(array(
                'service_name' => $serv['service_name'],
                'reference_number' => $serv['reference_number'],
            ));
        }
    }
}
