<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions_Detail extends Model
{
    protected $table = 'transactions_detail';
    protected $fillable = [
        'quantity',
        'total',
    ];
}
