<?php
namespace App\Actions;

use App\Models\Diagnose;
use App\Models\Docter;
use App\Models\Employee;
use App\Models\Invoice;
use App\Models\MedicalExamination;
use App\Models\MedicalImaging;
use App\Models\MedicalTests;
use App\Models\Orders;
use App\Models\Patient;
use App\Models\ProdectPharmacy;
use App\Models\Room;
use App\Models\Surgerie;
use App\Traits\ApiResponseTrait;

class UpdateAction{

    use ApiResponseTrait ;

    public function execute($resourceType , $data , $id ){

        $models = [
            'Docter' => Docter::class,
            'Employee' => Employee::class ,
            'Patient' => Patient::class ,
            'MedicalExamination' => MedicalExamination::class ,
            'Diagnose' => Diagnose::class ,
            'MedicalImaging' => MedicalImaging::class ,
            'MedicalTests' => MedicalTests::class ,
            'ProdectPharmacy' => ProdectPharmacy::class ,
            'Orders' => Orders::class ,
            'Surgerie' => Surgerie::class,
            'Room' => Room::class ,
        ]; 
        
     $modelClass = $models[$resourceType] ?? null;

     $Model =  $modelClass::FindOrFail($id);

     $Model->update($data) ;

     return $this->ApiResponse($Model , 'success updata' , 200) ;
    }
}