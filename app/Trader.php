<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transactions;

class Trader extends Model
{
    public $fillable = [
        'status',
        'type',
        'market_symbol',
        'currency_symbol'
    ];

    public function transactions()
    {
    	return $this->hasMany(Transactions::class);
    }

    
}
