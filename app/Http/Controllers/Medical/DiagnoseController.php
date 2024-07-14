<?php

namespace App\Http\Controllers\Medical;
use App\Actions\CreateAction ;
use App\Actions\UpdateAction;
use App\Http\Controllers\Controller;
use App\Models\Diagnose;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class DiagnoseController extends Controller
{

    use ApiResponseTrait ;

    public function index()
    {
        return $this->ApiResponse(Diagnose::all() , 'All Diagnoses ' , 201);
    }


    public function store(Request $request , CreateAction $CreateAction )
    {
        return   $CreateAction->execute('Diagnose' , $request->all());
    }

    public function show(string $id)
    {
        return $this->ApiResponse(Diagnose::find($id) , 'the examination ' , 201);
    }

    public function update(Request $request, string $id , UpdateAction $updateAction)
    {
        return $updateAction->execute('Diagnose' , $request->all() , $id);
    }

    public function destroy(string $id)
    {
        Diagnose::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
