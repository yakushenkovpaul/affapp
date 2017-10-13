<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SaleService;
use App\Http\Requests\SaleCreateRequest;
use App\Http\Requests\SaleUpdateRequest;

class SalesController extends Controller
{
    public function __construct(SaleService $sale_service)
    {
        $this->service = $sale_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sales = $this->service->paginated();
        return view('sales.index')->with('sales', $sales);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $sales = $this->service->search($request->search);
        return view('sales.index')->with('sales', $sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SaleCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleCreateRequest $request)
    {
        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('sales.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('sales.index'))->with('message', 'Failed to create');
    }

    /**
     * Display the sale.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = $this->service->find($id);
        return view('sales.show')->with('sale', $sale);
    }

    /**
     * Show the form for editing the sale.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = $this->service->find($id);
        return view('sales.edit')->with('sale', $sale);
    }

    /**
     * Update the sales in storage.
     *
     * @param  \Illuminate\Http\SaleUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaleUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->with('message', 'Failed to update');
    }

    /**
     * Remove the sales from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('sales.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('sales.index'))->with('message', 'Failed to delete');
    }
}
