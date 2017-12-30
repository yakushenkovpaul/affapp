<?php
/**
 * Created by PhpStorm.
 * User: pavelandreev
 * Date: 30.12.17
 * Time: 22:30
 */

namespace App\Http\Controllers\User;


use App\Services\ClubService;

class FavoritesClubs
{
    public function __construct(ClubService $clubService)
    {
        $this->service = $clubService;
    }

    /**
     * Отображение страницы
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        return view('user.favoritesClubs', ['clubs' => $this->service->favoritesList()]);
    }

    /**
     * Remove the merchants from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->favoritesDestroy($id);

        if ($result) {
            return redirect(route('favoritesClubs.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('favoritesClubs.index'))->with('message', 'Failed to delete');
    }

}