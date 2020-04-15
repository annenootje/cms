<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    public function overview() {

        $employees = Employee::all();

        return view("/elements/employees/overview",
            compact("employees"));
    }

    public function edit($id) {

        $employee = Employee::find($id);

        return view("/elements/employees/edit",
            compact('employee'));
    }

    public function new() {

        return view("/elements/employees/new");
    }

    public function store() {

        $employee = new Employee;
        $employee->name = request("name");
        $employee->telephone = request("telephone");
        $employee->email = request("email");
        $employee->function = request("function");
        $employee->image = request("image");
        $employee->description = request("description");
        $employee->save();

        return redirect()->action('EmployeesController@overview');
    }

    public function update($id) {

        $employee = Employee::find($id);
        $employee->name = request("name");
        $employee->telephone = request("telephone");
        $employee->email = request("email");
        $employee->function = request("function");
        $employee->image = request("image");
        $employee->description = request("description");
        $employee->save();

        return redirect()->action('EmployeesController@overview');

    }

    public function delete($id) {
        
        $employee = Employee::find($id);
        $employee->delete();
    
        return redirect()->action('EmployeesController@overview');
    }

    public function toggle($id) {
        
        $employee = Employee::find($id);
        
        $employee->visible = !$employee->visible;

        $employee->save();
    
        return redirect()->back();
    }
}
