<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
class ProductPharmacyController extends Controller
{

    use ApiResponseTrait;
    public function index()
    {
        //
    }

    public function create(Request $request , CreateAction $createAction)
    {
        $prodect = $createAction->execute('ProdectPharmacy' , $request->all());
        return $prodect ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
