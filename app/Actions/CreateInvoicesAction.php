<?php
namespace App\Actions;

use App\Models\Invoice;

class CreateInvoicesAction{

    public  function storeInvoice($resourceType , $id , $price , $patient){
        $foregin_key = [
            'id_examinations' => 'id_examinations'
        ];

        $modelClass = $foregin_key[$resourceType] ?? null;

        Invoice::create([
            'price' => $price ,
            'id_patient' => $patient ,
            $modelClass => $id ,
        ]);
    }
}