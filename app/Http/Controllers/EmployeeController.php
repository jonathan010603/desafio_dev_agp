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
        $request->cpf = preg_replace('/[^0-9]/', '', $request->cpf);
        $request->birthdate = preg_replace();
        Employee::create($request->all());

        return to_route('employees.index');
    }
}