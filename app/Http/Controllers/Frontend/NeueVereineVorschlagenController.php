<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class NeueVereineVorschlagenController extends Controller
{
    public function index()
    {
        return view('frontend.neue-vereine-vorschlagen');
    }

}
