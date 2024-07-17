<?php

namespace App\Http\Controllers\Medical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Actions\UpdateAction;
use App\Models\Surgerie;
use App\Traits\ApiResponseTrait;

class SurgeryController extends Controller
{
    use ApiResponseTrait ;
    public function index()
    {
        return $this->ApiResponse(Surgerie::all() , 'all Surgerie ' , 201);
    }

    public function store(Request $request, CreateAction $createAction)
    {
        return $createAction->execute( 'Surgerie',$request->all());
    }


    public function show($id)
    {
        return $this->ApiResponse(Surgerie::find($id) , 'the Surgery ' , 201);
    }


    public function update(Request $request, $id , UpdateAction $updateAction)
    {
        return $updateAction->execute('Surgerie' , $request->all() , $id);
    }


    public function destroy($id)
    {
        Surgerie::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
    
}
