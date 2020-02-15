<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    //* TABLE
    protected $table = "investments";

    //* INPUT
    protected $fillable = [
        'bussiness',
        'share_stock_amount',
        'unit_value',
        'amount',
    ];
}
