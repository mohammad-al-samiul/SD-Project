<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('employee.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'salary' => 'required',
                'gender' => 'required',
            ]
        );

        $obj = new Employee();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->joining_date = $request->date;
        $obj->salary = $request->salary;
        $obj->department = $request->department;
        $obj->gender = $request->gender;
        $obj->address = $request->address;
        $obj->status = $request->status == true ? 1 : 0;
        if ($obj->save()) {
            echo 'Employee Inserted Successfully';
        }
    }

    public function all()
    {
        $employees = Employee::all();
        return view('employee.all', compact('employees'));
    }
}
