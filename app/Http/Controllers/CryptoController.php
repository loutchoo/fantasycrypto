<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \CoinMarketCapApi;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class CryptoController extends Controller
{
    public function bitcoin(){
        $cryptos = Cryptocap::getSingleAsset('bitcoin');
        return view('bitcoin', compact('cryptos'));
    }

    public function solana(){
        $cryptos = Cryptocap::getSingleAsset('solana');
        return view('solana', compact('cryptos'));
        
    }
}