<?php

namespace App\Http\Controllers\Staff;

use App\Actions\CreateAction;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use ApiResponseTrait ;
    public function index()
    {
        //
    }

    public function create(CreateAction $createAction , Request $request)
    {
        
        $Employee = $createAction->execute( 'Employee' , $request->all());

        return $Employee ;
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
