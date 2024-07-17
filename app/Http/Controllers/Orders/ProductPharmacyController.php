<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Actions\UpdateAction;
use App\Models\ProdectPharmacy;

class ProductPharmacyController extends Controller
{

    use ApiResponseTrait;
    public function index()
    {
        return $this->ApiResponse(ProdectPharmacy::all() , 'all Prodects' , 200); 
    }

    public function store(Request $request  , CreateAction $createAction)
    {
        return $createAction->execute('ProdectPharmacy' , $request->all());

    }

    public function show($id)
    {
        return $this->ApiResponse(ProdectPharmacy::find($id) , 'the Prodect' , 200); 
    }

    public function update(Request $request, string $id , UpdateAction $updateAction) 
    {
        return $updateAction->execute('ProdectPharmacy' , $request->all() , $id);
    }


    public function destroy($id)
    {
        ProdectPharmacy::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
