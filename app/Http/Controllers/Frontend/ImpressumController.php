<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ImpressumController extends Controller
{
    public function index()
    {
        return view('frontend.impressum');
    }

}
