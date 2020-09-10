
@extends('admin.master');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
         </ul>
       </div>
      @endif


      @if (session('success'))
          <div class="alert alert-success">
             {{ session('success') }}
          </div>
        @endif

   
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
        <form action="{{ url('/edit') }}" method="post" >

          @csrf

          

        <input type="hidden" value="{{ $employee['employee_id'] }}" class="form-control" name="employee_id2"  >

        <div class="form-group">
         <label for="exampleInputEmail1">Employee Id</label>
         <input type="text" value="{{ $employee['employee_id'] }}" class="form-control" name="employee_id">
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Designation</label>
         <input type="text" value="{{ $employee['employee_designation'] }}" class="form-control" name="designation"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Department</label>
         <input type="text" value="{{ $employee['employee_department'] }}" class="form-control" name="department"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Employee Type</label>
         <input type="text" value="{{ $employee['employee_type'] }}" class="form-control" name="employee_type">
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Joining Date</label>
         <input type="date" value="{{ $employee['employee_joining_date'] }}" class="form-control" name="joining_date"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Company Name</label>
         <input type="text" value="{{ $employee['employee_company_name'] }}" class="form-control" name="company_name"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Reporting Manager</label>
         <input type="text" value="{{ $employee['employee_reporting_manager'] }}" class="form-control" name="reporting_manager"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Shift</label>
         <input type="text" value="{{ $employee['employee_shift'] }}" class="form-control" name="shift"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Employee Status</label>
         <input type="text" value="{{ $employee['employee_status'] }}" class="form-control" name="employee_status"
         >
         </div>

         <br><br>
         <h1>Personal Details</h1>

         <br>
         <!-- <label for="professional_details">Persional Details</label><br> -->
         
         <div class="form-group">
         <label for="exampleInputEmail1">Employee Image <img src="{{url('/images')}}/{{$employee['employee_image']}}" width="100" ></label>
         <input type="file" value="{{ $employee['employee_image'] }}" class="form-control" name="employee_image"
        >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">First Name</label>
         <input type="text" value="{{ $employee['employee_first_name'] }}" class="form-control" name="first_name">
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Last Name</label>
         <input type="text" value="{{ $employee['employee_last_name'] }}" class="form-control" name="last_name"
         >
         </div>

         <div class="form-group">
         <label class="col-md-2">Gender:</label>
            <div class="col-md-6">
                 <input type=radio name="optradio1" value="{{ $employee['employee_optradio1'] }}" {{ $employee['employee_optradio1'] == 'Male' ? 'checked' : ''}}>Male
                 <input type=radio name="optradio1" value="{{ $employee['employee_optradio1'] }}" {{ $employee['employee_optradio1'] == 'Female' ? 'checked' : ''}}>Female            
            </div>
        </div>

       <div class="form-group">
         <label for="exampleInputEmail1">DOB</label>
         <input type="date" value="{{ $employee['employee_dob'] }}" class="form-control" name="dob"
         >
         </div>


         <div class="form-group">
         <label for="exampleInputEmail1">Email Id</label>
         <input type="email" value="{{ $employee['employee_email_id'] }}" class="form-control" name="email_id">
         </div>

       

         <div class="form-group">
         <label for="exampleInputEmail1">Contact Number</label>
         <input type="text" value="{{ $employee['employee_contact_number'] }}" class="form-control" name="contact_number"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">State</label>
         <input type="text" value="{{ $employee['employee_state'] }}" class="form-control" name="state"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">City</label>
         <input type="text"  value="{{ $employee['employee_city'] }}" class="form-control" name="city"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Permanent Address</label>
         <input type="text" value="{{ $employee['employee_permanent_address'] }}" class="form-control" name="permanent_address"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Education details</label>
         <input type="text" value="{{ $employee['employee_education_details'] }}" class="form-control" name="education_details"
         >
         </div>

  
         <button type="submit" class="btn btn-primary">Submit</button>
        </form>




        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection