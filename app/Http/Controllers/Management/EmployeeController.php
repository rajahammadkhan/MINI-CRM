<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employ = Employee::with('CompanyName')->paginate(10);
        return view('management.employ.index',compact('employ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::get();
        return view('management.employ.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
        ]);
        $employ=Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id ,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('employ.show',$employ->id)->with('success', 'Employee Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employ=Employee::where('id',$id)->get()->first();
        $company=Company::get();
        return view('management.employ.edit',compact('company','employ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $employ=Employee::where('id', $id)->get()->first();
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
        ]);
        $employ->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id ' => $request->company_id ,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->back()->with('success', "Employee Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id', $id)->delete();
        return redirect()->back()->with('success', "Employee Deleted Successfully");
    }
}
