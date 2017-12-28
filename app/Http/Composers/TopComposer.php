<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class TopComposer {

    public function compose(View $view)
    {
        $user = (Auth::user())  ?   Auth::user()    :   null;

        $view->with('user', $user);
    }

}