<?php

namespace App\Http\Controllers\Medical;

use App\Actions\CreateAction;
use App\Actions\UpdateAction;
use App\Http\Controllers\Controller;
use App\Models\MedicalExamination;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class MedicalExaminationController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        return $this->ApiResponse(MedicalExamination::all() , 'all examinations ' , 201);
    }


    public function store(CreateAction $createAction , Request $request)
    {

      $examination =  $createAction->execute('MedicalExamination' , $request->all());
      
      $id_examination = MedicalExamination::latest()->first() ;
      $createAction->storeInvoice('id_examinations' , $id_examination->id , $id_examination->price , $id_examination->id_patient );

      return $examination ;
    }

    
    public function show(string $id)
    {
        return $this->ApiResponse(MedicalExamination::find($id) , 'the examination ' , 201);
    }

   
    public function update(Request $request, string $id , UpdateAction $updateAction)
    {
        return $updateAction->execute('MedicalExamination' , $request->all() , $id);
    }


    public function destroy(string $id)
    {
        MedicalExamination::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
