<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::paginate(10);
        return view('management.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.company.create');
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
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
            "name" => "required",
        ]);
        if ($request->file('logo')) {
            $image = $request->file('logo');
            $mainext = $image->getClientOriginalExtension();
            $main_file = 'logo' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $image->move(public_path('/images/media'), $main_file);
        }
        $company=Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $main_file,
        ]);

        return redirect()->route('company.show',$company->id)->with('success', 'Company Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::where('id', $id)->get()->first();
        return view('management.company.edit',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $company=Company::where('id', $id)->get()->first();
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
            "name" => "required",
        ]);
        if ($request->file('logo')) {
            $image = $request->file('logo');
            $mainext = $image->getClientOriginalExtension();
            $main_file = 'logo' . time() . rand(1000, 14000000000) . '.' . $mainext;
            $image->move(public_path('/images/media'), $main_file);
        }else {
            $main_file = $company->logo;
        }
        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $main_file,
        ]);
        return redirect()->back()->with('success', "Company Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::where('id', $id)->delete();
        return redirect()->back()->with('success', "Company Deleted Successfully");
    }
}
