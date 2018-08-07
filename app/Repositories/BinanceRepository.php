<?php

namespace App\Repositories;

use Binance\API;

class BinanceRepository
{
    public $api;

    public function __construct()
    {
        $this->api = new API(
            env('BINANCE_API_KEY'),
            env('BINANCE_API_SECRET')
        );
    }
}
