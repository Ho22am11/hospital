<?php
namespace App\Actions;

use App\Http\Controllers\Controller;
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
use App\Models\Surgerie;
use App\Models\User;
use App\Traits\ApiResponseTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateAction
{

    use ApiResponseTrait ;
    public function execute($resourceType ,$data)
    {
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
        ];
        $modelClass = $models[$resourceType] ?? null;

        $user = $modelClass::create($data);

        return $this->ApiResponse($user , 'success store' , 201) ;
    }

    public  function storeInvoice($resourceType , $id , $price , $patient){
        $foregin_key = [
            'id_examinations' => 'id_examinations',
            'id_imagings' => 'id_imagings',
        ];

        $modelClass = $foregin_key[$resourceType] ?? null;

        Invoice::create([
            'price' => $price ,
            'id_patient' => $patient ,
            $modelClass => $id ,
        ]);
    }
}