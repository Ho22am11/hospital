<?php

namespace App\Http\Controllers\Medical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CreateAction ;
use App\Models\Surgerie;

class SurgeryController extends Controller
{
    
    public function index()
    {
        //
    }

  
    public function create(Request $request , CreateAction $createAction)
    {
        $surgery = $createAction->execute( 'Surgerie',$request->all());
        $surgerylest = Surgerie::latest()->first();
        $createAction->storeInvoice('id_surgery' , $surgerylest->id ,  $surgerylest->price , $surgerylest->id_patient );
        return $surgery ;

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
