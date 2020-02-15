<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Http\Resources\BalanceCollection;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('dashboard/services')->with('services', $services);
    }

    public function formCreate()
    {
        return view('forms/create');
    }

    public function formPay()
    {
        $services = Service::all();
        return view('forms/pay')->with('services', $services);
    }

    public function pay(Request $request)
    {
        $serviceName = $request->get('options');
        $money = $request->get('amount');
        $salary = $this->getSalary();

        if ($salary >= $money) {
            $balance = new Balance();
            $balance->description = "Pago de servicio: " . $serviceName;
            $balance->total = -$money;
            $balance->save();
        }

        return redirect('dashboard/services');
    }

    public function create()
    {
        return redirect('dashboard/services');
    }

    public function store(Request $request)
    {
        $services = new Service();

        $services->service_name = $request->input('name');
        $services->reference_number = $request->input('numRef');
        $services->save();

        return redirect('dashboard/services');
    }
    private function getSalary()
    {
        $balance = new BalanceCollection(Balance::all());
        $salary = 0;

        foreach ($balance as $item) {
            $salary += $item->total;
        }

        return $salary;
    }
}
