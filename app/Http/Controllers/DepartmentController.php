<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function create()
    {
        return view('department.create');
    }
    public function store(Request $request)
    {

        $obj = new Department();
        $obj->name = $request->name;
        $obj->code = $request->code;
        $obj->established_at = $request->established;
        if ($obj->save()) {
            echo 'Successfully Inserted';
        }
    }
}
