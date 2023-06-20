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
            return redirect('department/all');
        }
    }
    public function all()
    {
        $departments = Department::all();
        return view('department.all', compact('departments'));
    }

    public function edit($id)
    {
        echo $id;
        $department = Department::find($id);
        return view('department.edit', compact('department'));
    }
    public function update(Request $req, $id)
    {
        $obj = Department::find($id);
        $obj->name = $req->name;
        $obj->code = $req->code;
        $obj->established_at = $req->established;

        if ($obj->save()) {
            return redirect('/department/all');
        }
    }

    public function  delete($id)
    {
        if (Department::find($id)->delete()) {
            return redirect('/department/all');
        };
    }
}
