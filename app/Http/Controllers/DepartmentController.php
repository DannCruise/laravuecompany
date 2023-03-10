<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return Inertia::render('Departments/Index',['departments' => $departments]);
    }
    public function create()
    {
        return Inertia::render('Departments/Create');
    }
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|max:100']);
        $department = new Department($request->input());
        $department->save();
        return redirect('departments');
    }
    public function show(Department $department)
    {
        //
    }
    public function edit(Department $department)
    {
        return Inertia::render('Departments/Edit',['department' => $department]);
    }
    public function update(Request $request, Department $department)
    {
        $request->validate(['name' => 'required|max:100']);
        $department->update($request->all());
        return redirect('departments');
    }
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect('departments');
    }
}
