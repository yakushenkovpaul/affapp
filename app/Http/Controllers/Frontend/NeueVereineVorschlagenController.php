<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NeueVereineVorschlagenStoreRequest;
use App\Services\ClubService;

class NeueVereineVorschlagenController extends Controller
{
    public function __construct(ClubService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('frontend.neue-vereine-vorschlagen');
    }


    public function store(NeueVereineVorschlagenStoreRequest $request)
    {
        if($result = $this->service->create($request->except('_token')))
        {
            return view('frontend.neue-vereine-vorschlagen-thankyou');
        }
    }

}
