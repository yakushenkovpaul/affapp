<?php
/**
 * Created by PhpStorm.
 * User: pavelandreev
 * Date: 30.12.17
 * Time: 15:55
 */

namespace App\Http\Controllers\Actions;

use App\Models\Merchant;
use App\Models\Club;
use Illuminate\Http\Request;
use App\Services\UserService;

class ActionsController
{
    /**
     * Create a new controller instance.
     *
     * ActionsController constructor.
     * @param UserService $userService
     */

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    /**
     * Устанавливает клуб по-умолчанию для пользователя
     *
     * @param Request $request
     * @return array
     */

    public function clubMain(Request $request)
    {
        if($user = $request->user())
        {
            if($data = request()->all())
            {
                if($model = Club::find($data['id']))
                {
                    $this->service->setClubMain(auth()->id(), $data['id']);
                    return response()->json(['result'=>true]);
                }
            }
        }
    }


    /**
     * Добавляет/удаляет магазин в избранное
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function merchantFav()
    {
        if($data = request()->all())
        {
            if($model = Merchant::find($data['id']))
            {
                auth()->user()->toggleFavorite($model);

                if(auth()->user()->hasFavorited($model))
                {
                    return response()->json(['result'=>true, 'name' => $model->name]);
                }

                return response()->json(['result'=>false, 'name' => $model->name]);
            }
        }
    }

    /**
     * Добавляет/удаляет клуб из избранного
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function clubFav()
    {
        if($data = request()->all())
        {
            if($model = Club::find($data['id']))
            {
                auth()->user()->toggleFavorite($model);

                if(auth()->user()->hasFavorited($model))
                {
                    return response()->json(['result'=>true, 'name' => $model->name]);
                }

                return response()->json(['result'=>false, 'name' => $model->name]);
            }
        }
    }

}