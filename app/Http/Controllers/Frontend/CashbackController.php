<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CashbackController extends Controller
{
    public function cashback()
    {
        return view('frontend.cashback');
    }

}
