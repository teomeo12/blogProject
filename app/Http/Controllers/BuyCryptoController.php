<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyCryptoController extends Controller
{
    public function index()
    {
        return view('buycrypto.buy');
    }
}