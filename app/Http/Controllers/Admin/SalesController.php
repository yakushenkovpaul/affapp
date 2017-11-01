<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.sales.index')->with('sales', $sales);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $sales = $this->service->search($request->search);
        return view('admin.sales.index')->with('sales', $sales);
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
            return redirect(route('admin.sales.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('admin.sales.index'))->with('message', 'Failed to create');
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
        return view('admin.sales.show')->with('sale', $sale);
    }

}
