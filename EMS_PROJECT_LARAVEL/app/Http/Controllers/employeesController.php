<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use  Illuminate\Validation\Validator;

use Illuminate\Http\Request;

use App\Employees_Model;

class employeesController extends Controller
{

    function index(){


        $employees_data = Employees_Model::paginate(4);


       // dd($products_data);

       

       return view('admin.all-employees',compact('employees_data'));

    }

    function store(Request $request){

        // echo "<pre>";
        // print_r($request->employee_id);
        // exit;

        $request->validate([
                 
            'employee_id' => 'max:10|required|numeric|unique:employees_Model',
            'designation' => 'required',
            'department' => 'required',
            'employee_type' => 'required',
            'joining_date' => 'required',
            'company_name' => 'required',
            'reporting_manager' => 'required',
            'shift' => 'required|max50',
            'employee_status' => 'required|',
            'employee_image' => 'required|image|mimes:jpeg,png',
            'employee_first_name' => 'required|regex:/^[a-zA-Z_-]*$/',
            'employee_last_name' => 'required|regex:/^[a-zA-Z_-]*$/',
            'employee_optradio1' => 'required',
            'employee_dob' => 'required',
            'employee_email_id' => 'required|unique:employees_Model',
            'employee_contact_number' => 'required|numeric',
            'employee_state' => 'required',
            'employee_city' => 'required',
            'employee_permanent_address' => 'required',
            'employee_education_details' => 'required',

        ]
        );

     
     $employee = new Employees_Model();

     $employee->employee_id = $request->employee_id;
     $employee->employee_designation = $request->designation;
     $employee->employee_department = $request->department;
     $employee->employee_type = $request->employee_type;
     $employee->employee_joining_date = $request->joining_date;
     $employee->employee_company_name = $request->company_name;
     $employee->employee_reporting_manager = $request->reporting_manager;
     $employee->employee_shift = $request->shift;
     $employee->employee_status = $request->employee_status;
     $employee->employee_image = $request->employee_image;
     $employee->employee_first_name = $request->first_name;
     $employee->employee_last_name = $request->last_name;
     $employee->employee_optradio1 = $request->optradio1;
     $employee->employee_dob = $request->dob;
     $employee->employee_email_id = $request->email_id;
     $employee->employee_contact_number = $request->contact_number;
     $employee->employee_state = $request->state;
     $employee->employee_city = $request->city;
     $employee->employee_permanent_address = $request->permanent_address;
     $employee->employee_education_details = $request->education_details;
    
     //$employee->product_image = "1";

     $employee->save();

     return view('admin.add-employee');

    }

   //delete
    function delete($employee_id){

        // echo $id;

        $employee = Employees_Model::find($employee_id);

        if(!empty($employee)){
            $employee->delete();

        }
        $employees_data = Employees_Model::all()->toArray();

       // return view('admin.all-products',compact('products_data'))->with('status', 'Record Deleted');

         return redirect()->back()->with('employees_data',$employees_data)->with('success','Product has been deleted successfully!');


    }

    function edit($employee_id){

        

        $employee = Employees_Model::where('employee_id',$employee_id)->get()->toArray();
        //   echo "<pre>";
        // print_r($employee);
        // exit;
       $employee = $employee[0];
         return view('admin.edit-employee',compact('employee'));

    }


    // update product
    function update(Request $request){

// print_r($request->employee_id);
// exit;
        $request->validate([
                 
            'employee_id' => 'required|numeric|max:10|unique:employees_Model',
            'designation' => 'required|max:50',
            'department' => 'required|max:50',
            'employee_type' => 'required|max:50',
            'joining_date' => 'required',
            'company_name' => 'required|max:50',
            'reporting_manager' => 'required|max:50',
            'shift' => 'required|max50',
            'employee_status' => 'required|max:50',
            'employee_image' => 'required|image|mimes:jpeg,png|max:2048',
            'employee_first_name' => 'required|max:50|regex:/^[a-zA-Z_-]*$/',
            'employee_last_name' => 'required|max:50|regex:/^[a-zA-Z_-]*$/',
            'employee_optradio1' => 'required',
            'employee_dob' => 'required',
            'employee_email_id' => 'required|unique:employees_Model',
            'employee_contact_number' => 'required|numeric|max:10',
            'employee_state' => 'required',
            'employee_city' => 'required',
            'employee_permanent_address' => 'required|max:200',
            'employee_education_details' => 'required',
        ]
   
        );
   
     //$data = $request->all();

    //     print_r($data);
    // $employee = new Employees_Model;
     // $employee = Employees_Model::where('employee_id',$request->employee_id)->get()->toArray();
      
        //  print_r($request->status);
        //  exit;


    // $employee = Employees_Model::find($request->employee_id)->get()->toArray();
     $employee1 = array();
     $employee1['employee_id'] = $request->employee_id;
     $employee1['employee_designation']  = $request->designation;
     $employee1['employee_department'] = $request->department;
     $employee1['employee_type'] = $request->employee_type;
     $employee1['employee_joining_date'] = $request->joining_date;
     $employee1['employee_company_name'] = $request->company_name;
     $employee1['employee_reporting_manager'] = $request->reporting_manager;
     $employee1['employee_shift'] = $request->shift;
     $employee1['employee_status'] = $request->employee_status;
     $employee1['employee_image'] = $request->employee_image;
     $employee1['employee_first_name'] = $request->first_name;
     $employee1['employee_last_name'] = $request->last_name;
     $employee1['employee_optradio1'] = $request->optradio1;
     $employee1['employee_dob'] = $request->dob;
     $employee1['employee_email_id'] = $request->email_id;
     $employee1['employee_contact_number'] = $request->contact_number;
     $employee1['employee_state'] = $request->state;
     $employee1['employee_city'] = $request->city;
     $employee1['employee_permanent_address'] = $request->permanent_address;
     $employee1['employee_education_details'] = $request->education_details;
    // $employee->product_image = "1";

     $employee = Employees_Model::where('employee_id',$request->employee_id)
                                  ->update($employee1);

    //   echo "<pre>";
    //   print_r($employee);
    //   exit;

    // $employee->save();

     return redirect()->back()->with('success','Product has been updated successfully!');

  
       //  dd($request->pid);

    }

    public function search(Request $request){

           $search = $request->search;

           if($search != ''){
           $employees_data = Employees_Model::where('employee_first_name','like', '%' .$search. '%')
                                       ->orWhere('employee_email_id', 'like', '%' .$search. '%')
                                       ->paginate(2)->setPath('');

               $employees_data->appends(['search' => $search]);
                //  echo "<pre>";
                // print_r($employees_data->appends(array($search)));
                // exit;
               if( count($employees_data)>0 ){
                   return view('admin.all-employees',compact('employees_data'));
               }
            }
            else{
    
                 // $message = "No found results!";

                return view('admin.all-employees')->withTitle('No found results!');
            }

    }

   


}
