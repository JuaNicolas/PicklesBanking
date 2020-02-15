<?php

namespace App\Http\Controllers;
use App\Balance;
use App\Http\Resources\BalanceCollection;

class BalanceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //* Get Balance movements
        $balances = new BalanceCollection(Balance::all());

        $salary = 0;

        foreach ($balances as $item) {
            $salary += $item->total;
        }

        return view('dashboard/balance')->with([
            'balances' => $balances,
            'salary' => $salary,
        ]);}
}
