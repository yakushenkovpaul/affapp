<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubSearchRequest;
use App\Services\ClubListingService;
use Illuminate\Http\Request;


class ClubController extends Controller
{
    /**
     * ClubController constructor.
     * @param ClubListingService $clubListingService
     */

    public function __construct(ClubListingService $clubListingService)
    {
        $this->service = $clubListingService;
    }

    /**
     * Вывод списка клубов
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */

    public function clubs(Request $request)
    {
        $result = $this->service->getClubsPaginate();

        if ($request->ajax()) {

            return response()->json([
                'html' => view('listing.clubs')
                    ->with('clubs', $result)
                    ->render(),
                'next_page_url' => $result['next_page_url']
            ]);
        }

        return view('frontend.clubs')
            ->with('clubs', $result)
            ->with('next_page_url', $result['next_page_url']);
    }

    /**
     * Вывод клуба
     *
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function club($name)
    {
        return view('frontend.club');
    }


    /**
     * Поиск
     *
     * @param ClubSearchRequest $request
     * @return array|void
     */

    public function search(ClubSearchRequest $request)
    {
        $data = $request->all();

        $query = (isset($data['query']))    ?   $data['query']  :   null;

        if(!empty($query))
        {
            $result = $this->service->getSearch($query);
        }
        else
        {
            $result = $this->service->getClubsPaginate();
        }

        return response()->json([
                'html' => view('listing.clubs')
                    ->with('clubs', $result)
                    ->render(),
                'next_page_url' => $result['next_page_url']
            ]
        );
    }

}
