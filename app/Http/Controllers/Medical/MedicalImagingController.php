<?php

namespace App\Http\Controllers\Medical;
use App\Actions\CreateAction ;
use App\Actions\UpdateAction;
use App\Http\Controllers\Controller;
use App\Models\MedicalImaging;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class MedicalImagingController extends Controller
{
    use ApiResponseTrait ;

    public function index()
    {
        return $this->ApiResponse(MedicalImaging::all() , 'all patients ' , 201);
    }


    public function store(Request $request , CreateAction $createAction)
    {
        $MedicalImaging = $createAction->execute('MedicalImaging' , $request->all());
        $MedicalImag = MedicalImaging::latest()->first();
        $createAction->storeInvoice('id_imagings' , $MedicalImag->id , $MedicalImag->price , $MedicalImag->id_patient );
        return $MedicalImaging;
    }


    public function show(string $id)
    {
        return $this->ApiResponse(MedicalImaging::find($id) , 'the patient ' , 201);
    }


    public function update(Request $request, string $id , UpdateAction $updateAction)
    {
        return $updateAction->execute('MedicalImaging' , $request->all() , $id);
    }

    public function destroy(string $id)
    {
        MedicalImaging::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
