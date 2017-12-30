<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class PublicComposer {

    public function compose(View $view)
    {
        $user = (Auth::user())  ?   Auth::user()    :   null;

        #$user->getAuthIdentifier();

        $view->with('user', $user);
    }

}