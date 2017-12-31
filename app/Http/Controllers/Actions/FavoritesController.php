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


class FavoritesController
{
    /**
     * Добавляет/удаляет магазин в избранное
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function merchant()
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

    public function club()
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