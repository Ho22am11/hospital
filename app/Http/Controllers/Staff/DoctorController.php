<?php

namespace App\Http\Controllers;

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
        $resourceType = 'Docter' ;
        $doctor = $createAction->execute($resourceType ,$request->all());
        return $this->ApiResponse($doctor,'success store doctor',201);
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
