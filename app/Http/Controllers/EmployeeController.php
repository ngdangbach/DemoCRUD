<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller{
    public function index(){
        $employees = Employee::all();
        return view("employee.index",compact('employees'));
    }
    public function show(Employee $employee){
        return view("employee.show", compact('employee'));
    }
    public function create(){
        return view("employee.create");
    }
    public function edit(Employee $employee){
        return view("employee.edit",compact('employee'));
    }
    public function store(Request $request){
        $request->validate([           
            'EmployeeName'=>'required|string|max:255',
            'EmployeeEmail'=>'required|email',
            'EmployeeGender'=>'required|string',
        ]);

        $EmployeeName=$request->input('EmployeeName');
        $EmployeeEmail=$request->input('EmployeeEmail');
        $EmployeeGender=$request->input('EmployeeGender');
       

        DB::table('employees')->insert([      
            'EmployeeName' => $EmployeeName,
            'EmployeeEmail' => $EmployeeEmail,
            'EmployeeGender' => $EmployeeGender,
        ]);

        return redirect()->route('employee.index')->with('success','Employee added successfully.');
    }
    public function destroy(Employee $employee){
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Employee deleted successfully.');
    }
    public function update(Request $request,Employee $employee){
        $request->validate([           
            'EmployeeName'=>'required|string|max:255',
            'EmployeeEmail'=>'required|email',
            'EmployeeGender'=>'required|string',
        ]);

        $EmployeeName=$request->input('EmployeeName');
        $EmployeeEmail=$request->input('EmployeeEmail');
        $EmployeeGender=$request->input('EmployeeGender');
       

        $employee->update([      
            'EmployeeName' => $EmployeeName,
            'EmployeeEmail' => $EmployeeEmail,
            'EmployeeGender' => $EmployeeGender,
        ]);
        return redirect()->route('employee.index')->with('success','Employee updated successfully.');
    }
}