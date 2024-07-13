<?php

namespace App\Http\Controllers\Medical;

use App\Actions\CreateAction;
use App\Actions\UpdateAction;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    use ApiResponseTrait ;

    public function index()
    {
        return $this->ApiResponse(Patient::all() , 'all patients ' , 201);
    }

    public function store(Request $request , CreateAction $createAction)
    {
        $patient = $createAction->execute('Patient' , $request->all());

        return $patient ;
    }

    public function show(string $id)
    {
        return $this->ApiResponse(Patient::find($id) , 'the patient ' , 201);
    }


    public function update(Request $request, string $id , UpdateAction $updateAction)
    {
        return $updateAction->execute('Patient' , $request->all() , $id);
    }

   
    public function destroy(string $id)
    {
        Patient::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
