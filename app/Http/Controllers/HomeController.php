<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['user']=User::get();
        $data['company']=Company::get();
        $data['employee']=Employee::get();
        return view('home',$data);
    }
}
