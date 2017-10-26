<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\MerchantService;
use App\Http\Requests\MerchantCreateRequest;
use App\Http\Requests\MerchantUpdateRequest;
use App\Models\Merchant;

class MerchantsController extends Controller
{
    public function __construct(MerchantService $merchant_service)
    {
        $this->service = $merchant_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $merchants = $this->service->paginated();
        return view('merchants.index')->with('merchants', $merchants);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $merchants = $this->service->search($request->search);
        return view('merchants.index')->with('merchants', $merchants);
    }




    protected function create(array $data)
    {
        return DB::transaction(function() use ($data) {
            $merchant = Merchant::create($data);

            return $this->service->create($merchant. $data);
        });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\MerchantCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerchantCreateRequest $request)
    {
        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('merchants.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('merchants.index'))->with('message', 'Failed to create');
    }

    /**
     * Display the merchant.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merchant = $this->service->find($id);
        return view('merchants.show')->with('merchant', $merchant);
    }

    /**
     * Show the form for editing the merchant.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merchant = $this->service->find($id);
        return view('merchants.edit')->with('merchant', $merchant);
    }

    /**
     * Update the merchants in storage.
     *
     * @param  \Illuminate\Http\MerchantUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MerchantUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->with('message', 'Failed to update');
    }

    /**
     * Remove the merchants from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('merchants.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('merchants.index'))->with('message', 'Failed to delete');
    }
}
