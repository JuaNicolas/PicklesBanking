<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Services::all();

        return view('service.index')->with('services', $services);
    }

    public function pay(Request $request)
    {
        $serviceName = $request->get('serviceName');
        $money = $request->get('importe');

        $balance = Balance::all();
        $salary = 0;

        foreach ($balance as $item) {
            $salary += $item->importe;
        }

        if ($salary >= $money) {
            $balance = new Balance();
            $balance->fecha = date('Y-m-d');
            $balance->desc = "Pago de servicio: " . $serviceName;
            $balance->importe = -$money;
            $balance->save();

            Session::flash('payMsg', 'Servicio ' . $serviceName . ' pagado correctamente!');
            Session::flash('alertClass', 'alert-primary');
        } else {
            Session::flash('payMsg', 'No tienes suficiente dinero en la cuenta!');
            Session::flash('alertClass', 'alert-danger');
        }

        return redirect()->route('service.index');
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $services = new Services();

        $services->nombre = $request->input('nombre');
        $services->num_ref = $request->input('numRef');

        $services->save();

        return redirect()->route('service.index');
    }
}
