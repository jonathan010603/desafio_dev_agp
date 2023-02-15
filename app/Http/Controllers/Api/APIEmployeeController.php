<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiPostStoreRequest;
use App\Http\Requests\Api\ApiPostUpdateRequest;

class APIEmployeeController extends Controller
{

    private $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $employees = $this->employee->paginate(10);

        return response()->json($employees, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiPostStoreRequest $request)
    {
        $employee = Employee::create($request->all());

        return response()->json([
            'message' => 'Employee added successfully!',
            'employee' => $employee
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $employee = Employee::find($request->employee);

        if (!@isset($employee)) {
            return response()->json([
                'message' => 'Employee not found'
            ], 404);
        } else {
            return $employee->first();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(ApiPostUpdateRequest $request)
    {
        $employee = Employee::find($request->employee);

        if (!@isset($employee)) {
            return response()->json([
                'message' => 'Employee not found'
            ], 404);
        } else {
            $employee->update($request->all());
            return response()->json([
                'message' => 'Employee updated successfully!',
                'employee' => $employee
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $employee = Employee::find($request->employee);

        if (!@isset($employee)) {
            return response()->json([
                'message' => 'Employee not found'
            ], 404);
        } else {
            $employee->delete();
            return response()->json([
                'message' => 'Employee removed successfully!',
                'employee' => $employee
            ], 200);
        }
    }
}