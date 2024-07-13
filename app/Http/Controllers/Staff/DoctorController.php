<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Actions\UpdateAction;
use App\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;
use App\Models\Docter;

class DoctorController extends Controller
{
    use ApiResponseTrait;
   
    public function index( )
    {
        return Docter::all() ;
    }

    public function store(CreateAction $createAction , Request $request)
    {
        $doctors = $createAction->execute('Docter' ,$request->all());
        return $doctors ;
    }

    
    public function show($id)
    {
        $doctor = Docter::findOrFail($id);
        return $doctor ;
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id , UpdateAction $updateAction)
    {
        $doctor = $updateAction->execute('Docter' , $request->all() ,  $id );

        return $doctor ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
