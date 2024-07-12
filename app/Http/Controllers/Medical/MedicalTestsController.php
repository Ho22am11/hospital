<?php

namespace App\Http\Controllers\Medical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Models\MedicalTests;
use App\Traits\ApiResponseTrait;

class MedicalTestsController extends Controller
{

    use ApiResponseTrait;

    public function index()
    {
        //
    }


    public function create(Request $request , CreateAction $createAction)
    {
        $test = $createAction->execute('MedicalTests' , $request->all());
        $testlast = MedicalTests::latest()->first();
        $createAction->storeInvoice('id_tests' ,$testlast->id ,$testlast->price , $testlast->id_patient );
        return $test ;
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
