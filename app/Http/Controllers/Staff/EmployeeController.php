<?php

namespace App\Http\Controllers\Staff;

use App\Actions\CreateAction;
use App\Actions\UpdateAction;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use ApiResponseTrait ;

    public function index()
    {
        return $this->ApiResponse(Employee::all() , 'all Employees' , 200); 
    }


    public function store(CreateAction $createAction  , Request $request)
    {
        $Employee = $createAction->execute( 'Employee' , $request->all());

        return $Employee ;
    }

   
    public function show(string $id)
    {
        return $this->ApiResponse(Employee::find($id) , 'done' , 200); 
    }

 

    public function update(Request $request, string $id , UpdateAction $updateAction)
    {
      return  $updateAction->execute('Employee' , $request->all() , $id) ;
    }


    public function destroy(string $id)
    {
        Employee::destroy($id);
        return $this->ApiResponse('' , 'done delete' , 204 ) ;
    }
}
