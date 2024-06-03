<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Mail\EmployeeNotification;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('Perfect_Employee.index')->with('employees', $employees);
    }

    public function create()
    {
        return view('Perfect_Employee.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('file')) {
            $input['file'] = $request->file('file')->store('files', 'public');
        }

        // Employee::create($input);
        $employee = Employee::create($input);

        // Send notification email
        Mail::to('sazaldreamdiver@gmail.com')->send(new EmployeeNotification($employee));

        return redirect()->back()->with('success_message', 'Employee added successfully!');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return view('Perfect_Employee.show')->with('employees', $employee);
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('Perfect_Employee.edit')->with('employees', $employee);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['image'] = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('file')) {
            $input['file'] = $request->file('file')->store('files', 'public');
        }

        $employee->update($input);
        return redirect('employee')->with('flash_message', 'Employee updated!');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee')->with('flash_message', 'Employee deleted!');
    }
}
