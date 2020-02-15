<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    //* TABLE
    protected $table = "balances";

    //* INPUT
    protected $fillable = [
        'description',
        'total',
    ];
}
