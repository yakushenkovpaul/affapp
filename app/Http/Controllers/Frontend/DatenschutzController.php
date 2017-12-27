<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class DatenschutzController extends Controller
{
    public function index()
    {
        return view('frontend.datenschutz');
    }

}
