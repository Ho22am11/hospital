<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    use ApiResponseTrait;
   
    public function index( )
    {
        
    }


    public function create(CreateAction $createAction , Request $request)
    {
        
        $doctor = $createAction->execute('Docter' ,$request->only('id_patient' , 'id_doctor' , 'total'));
        return $doctor ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
