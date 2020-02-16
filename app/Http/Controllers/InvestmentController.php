<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Http\Resources\BalanceCollection;
use App\Http\Resources\Investment as InvestmentResource;
use App\Http\Resources\InvestmentCollection;
use App\Investment;

class InvestmentController extends Controller
{
    public function index()
    {

        $investments = new InvestmentCollection(Investment::all());
        $salary = $this->getSalary();

        return view('dashboard/investments')->with(['investments' => $investments, 'salary' => $salary]);
    }

    public function buy($id)
    {
        $investment = new InvestmentResource(Investment::findOrFail($id));
        $salary = $this->getSalary();

        $investment_amount = $investment->amount;

        if ($salary >= $investment_amount && $investment_amount >= 0) {

            $invUpdate = Investment::find($id);
            $invUpdate->share_stock_amount += 1;
            $invUpdate->amount += $investment->unit_value;
            $invUpdate->save();

            $balance = new Balance();
            $balance->description = "Compra de Accion: " . $investment->bussiness;
            $balance->total -= $investment->unit_value;
            $balance->save();

        }
        return redirect('dashboard/investments');
    }

    public function sell($id)
    {
        $investment = new InvestmentResource(Investment::findOrFail($id));
        $salary = $this->getSalary();

        if ($investment->share_stock_amount > 0) {

            $invUpdate = Investment::find($id);
            $invUpdate->share_stock_amount -= 1;
            $invUpdate->amount -= $investment->unit_value;
            $invUpdate->save();

            $balance = new Balance();
            $balance->description = "Venta de Accion: " . $investment->bussiness;
            $balance->total += $investment->unit_value;
            $balance->save();
        }
        return redirect('dashboard/investments');
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
