<?php

namespace App\Http\Controllers\Medical;

use App\Actions\CreateAction;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    use ApiResponseTrait ;
    public function index()
    {
        //
    }

    public function create(Request $request , CreateAction $createAction)
    {
       $patient = $createAction->execute('Patient' , $request->all());

        return $this->ApiResponse($patient ,'success store patient',201);
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
