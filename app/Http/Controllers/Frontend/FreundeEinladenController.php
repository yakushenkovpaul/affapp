<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FreundeEinladenController extends Controller
{
    public function index()
    {
        return view('frontend.freunde-einladen');
    }

}
