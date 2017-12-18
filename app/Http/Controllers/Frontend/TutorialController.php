<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class TutorialController extends Controller
{
    public function tutorial()
    {
        return view('frontend.tutorial');
    }

}
