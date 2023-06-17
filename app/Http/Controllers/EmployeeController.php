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
        $obj = new Employee();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->joining_date = $request->date;
        $obj->salary = $request->salary;
        $obj->department = $request->department;
        $obj->gender = $request->gender;
        $obj->address = $request->address;
        if ($obj->save()) {
            echo "Employee created Successfully";
        }
    }
}
