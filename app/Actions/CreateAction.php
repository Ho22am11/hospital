<?php
namespace App\Actions;

use App\Http\Controllers\Controller;
use App\Models\Docter;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateAction
{

    public function execute($resourceType ,$data)
    {
        $models = [
            'Docter' => Docter::class,
            'Employee' => Employee::class ,
        ];
        $modelClass = $models[$resourceType] ?? null;

        $user = $modelClass::create($data);

        return $user ;
    }
}