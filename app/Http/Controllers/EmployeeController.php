<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Gate;
use Illuminate\Http\Request;
use Response;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.index')
            ->with('employees', $employees);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(StoreEmployeeRequest $request)
    {
        Employee::create($request->all());

        return to_route('employees.index');
    }

    public function destroy(Employee $employee)
    {
        dd($employee);
        return to_route('employees.index');
    }
}