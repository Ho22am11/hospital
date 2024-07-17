<?php

namespace App\Http\Controllers\Medical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Actions\UpdateAction;
use App\Models\MedicalTests;
use App\Traits\ApiResponseTrait;

class MedicalTestsController extends Controller
{

    use ApiResponseTrait;

    public function index()
    {
        return $this->ApiResponse(MedicalTests::all() , 'the tests' , 201);
    }


    public function store(Request $request, CreateAction $createAction)
    {
        return $createAction->execute('MedicalTests' , $request->all());

    }

    public function show( $id)
    {
        return $this->ApiResponse(MedicalTests::find($id) , 'the tests' , 201);
    }

    public function update(Request $request, $id , UpdateAction $updateAction )
    {
        return $updateAction->execute('MedicalTests' , $request->all() , $id); 
    }


    public function destroy(string $id)
    {
        MedicalTests::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
