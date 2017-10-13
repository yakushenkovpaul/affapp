<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ClubService;
use App\Http\Requests\ClubCreateRequest;
use App\Http\Requests\ClubUpdateRequest;

class ClubsController extends Controller
{
    public function __construct(ClubService $club_service)
    {
        $this->service = $club_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clubs = $this->service->paginated();
        return view('clubs.index')->with('clubs', $clubs);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $clubs = $this->service->search($request->search);
        return view('clubs.index')->with('clubs', $clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ClubCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClubCreateRequest $request)
    {
        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('clubs.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('clubs.index'))->with('message', 'Failed to create');
    }

    /**
     * Display the club.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = $this->service->find($id);
        return view('clubs.show')->with('club', $club);
    }

    /**
     * Show the form for editing the club.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = $this->service->find($id);
        return view('clubs.edit')->with('club', $club);
    }

    /**
     * Update the clubs in storage.
     *
     * @param  \Illuminate\Http\ClubUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClubUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->with('message', 'Failed to update');
    }

    /**
     * Remove the clubs from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('clubs.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('clubs.index'))->with('message', 'Failed to delete');
    }
}
