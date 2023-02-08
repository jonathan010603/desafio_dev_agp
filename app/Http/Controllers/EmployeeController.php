<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        try {
            $employees = Employee::all();
            return view('pages.index')
                ->with('employees', $employees);
        } catch (QueryException $error) {
            return view('special.queryError');
        }
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