<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
	
    public function listEmployees(Request $request)
    {
    	return Employee::get();
    }

    public function getEmployee(Request $request)
    {
        $employee = Employee::find($request->id);
        
        if(!empty($employee))
        {
            return $employee;
        }

        return response()->json(['error' => 'Não foi encontrado'], 404);

        // return Employee::findOrFail($request->id);
        
    }

    public function createEmployee(Request $request)
    {
    	$Employee = new Employee($request->all());
    	$Employee->save();

    	return $Employee;
    }

    public function editEmployee(Request $request)
    {
    	$Employee = Employee::findOrFail($request->id);
    	$Employee->update($request->all());

    	return $Employee;
    }

    public function deleteEmployee(Request $request)
    {
    	Employee::findOrFail($request->id)->delete();
    }

}

