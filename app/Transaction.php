<?php

namespace App;

use App\Trader;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $fillable = [
    	'trader_id',
    	'type',
    	'currency_price',
    	'market_price'
    ];

    public function trader()
    {
        return $this->belongsTo(Trader::class);
    }
}
