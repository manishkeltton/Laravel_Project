<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees_Model;
use Auth;

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

        $employee = Employees_Model::where('employee_id',23)->get()->toArray();
       
//   echo "<pre>";
//         print_r($employee);
//         exit;
        
        return view('admin.dashboard',compact('employee'));
    }

    public function logout(){

       Auth::logout();

       return redirect('/login');

    }
}
