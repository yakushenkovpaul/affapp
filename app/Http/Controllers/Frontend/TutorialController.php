<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class TutorialController extends Controller
{
    public function index()
    {
        return view('frontend.tutorial');
    }

}
