<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //* TABLE
    protected $table = "services";

    //* INPUTS
    protected $fillable = [
        'service_name',
        'reference_number',
    ];
}
