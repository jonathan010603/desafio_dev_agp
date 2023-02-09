<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        Employee::create($request->all());

        return to_route('employees.index');
    }
}