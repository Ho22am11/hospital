<?php
namespace App\Actions;

use App\Models\Docter;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CreateAction
{

    public function execute($data)
    {
        $user = Docter::create($data);

        return $user ;
    }
}