<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSendRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Отображение формы
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Получает данные из формы
     *
     * @param ContactSendRequest $request
     */

    public function post(ContactSendRequest $request)
    {
        $this->send($request->all());
    }

    /**
     * Отправляет данные
     *
     * @param array $data
     */

    protected function send(array $data)
    {
        Mail::to(Config::get('mail.to.address'))->send(new Contact($data));
    }

}
