<?php

namespace App\Jobs;

use App\Repositories\BinanceRepository;

class TradingSessionJob extends Job
{

    protected $trader;

    public function __construct($trader)
    {
        $this->trader = $trader;
    }

    public function handle(BinanceRepository $binance)
    {
        $api = $binance->api;
    }
}
