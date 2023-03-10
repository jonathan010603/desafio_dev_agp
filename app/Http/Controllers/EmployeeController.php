<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Requests\SubmitEmployeeRequest;
use App\Jobs\DeleteEmployee;
use App\Jobs\StoreEmployee;
use App\Jobs\UpdateEmployee;
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

    public function store(PostStoreRequest $request)
    {
        StoreEmployee::dispatch(collect($request->all()));
        return to_route('employees.index');
    }

    public function edit(Employee $employee)
    {
        return view('pages.edit')
            ->with('employee', $employee);
    }

    public function update(Employee $employee, PostUpdateRequest $request)
    {
        UpdateEmployee::dispatch($employee, $request->all());
        $employee->fill($request->all());
        $employee->save();
        return to_route('employees.index');
    }

    public function remove(Employee $deleteEmployee)
    {
        return view('pages.index')
            ->with('employees', Employee::all())
            ->with('deleteEmployee', $deleteEmployee);
    }

    public function destroy(Employee $deleteEmployee)
    {
        DeleteEmployee::dispatch($deleteEmployee);
        return to_route('employees.index');
    }
}