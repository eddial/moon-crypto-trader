<?php

namespace App\Http\Controllers;

use App\Trader;
use Illuminate\Http\Request;
use App\Repositories\BinanceRepository;

class TraderController extends Controller
{
	public function index()
    {
        return Trader::all();
    }

    public function show(Trader $trader, BinanceRepository $binance)
    {

    	$binance->api->chart(["BNBBTC"], "15m", function($api, $symbol, $chart) {
			echo "{$symbol} chart update\n";
			dd($chart);
		});

        //return $trader;
    }

    public function store(Request $request)
    {
        return Trader::create($request->all());
    }
}
