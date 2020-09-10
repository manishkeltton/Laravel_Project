
@extends('admin.master');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/register') }}"><u>Employee Registration</u></a></li>
            
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

        <!-- Small boxes (Stat box) -->
        <div class="row">

        <!-- <form action=""> -->



        <form action="{{ url('/add-employee') }}" method="post" >

          @csrf

          
          <!-- <label for="professional_details">Professional Details</label><br> -->

         <ul class="nav nav-tabs" id="myTab" role="tablist">
                 <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TAB1</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">TAB2</a>
                </li>
         </ul>
       
          <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-primary active">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> TAB1
         </label> -->
         <div class="tab-content profile-tab" id="myTabContent"> 
         <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <br>
         <h1>Professional Details</h1>
          <br>

         <div class="form-group">
         <label for="exampleInputEmail1">Employee Id</label>
         <input type="text" class="form-control" name="employee_id">
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Designation</label>
         <input type="text" class="form-control" name="designation"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Department</label>
         <input type="text" class="form-control" name="department"
         >
         </div>


         <div class="form-group">
         <label for="exampleInputEmail1">Employee Type</label>
         <input type="text" class="form-control" name="employee_type">
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Joining Date</label>
         <input type="date" class="form-control" name="joining_date"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Company Name</label>
         <input type="text" class="form-control" name="company_name"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Reporting Manager</label>
         <input type="text" class="form-control" name="reporting_manager"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Shift</label>
         <input type="text" class="form-control" name="shift"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Employee Status</label>
         <input type="text" class="form-control" name="employee_status"
         >
         </div>
<!-- 
         <div class="form-group">
         <label for="exampleInputEmail1">Division</label>
         <textarea class="form-control" name="division"
         ></textarea>
         </div> -->

         </div>
         
         <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

         <br>
         <h1>Personal Details</h1>

         
         <!-- <label for="professional_details">Persional Details</label><br> -->

         <div class="form-group">
         <label for="exampleInputEmail1">Employee Image</label>
         <input type="file" class="form-control" name="employee_image"
        >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">First Name</label>
         <input type="text" class="form-control" name="first_name">
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Last Name</label>
         <input type="text" class="form-control" name="last_name"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Gender</label>

         <div class="radio">
           <label><input type="radio" name="optradio1" value="Male" checked> Male </label>
           <label><input type="radio" name="optradio1" value="Female" > Female </label>
           <label><input type="radio" name="optradio1" disabled> Other </label>          
         </div>

       <div class="form-group">
         <label for="exampleInputEmail1">DOB</label>
         <input type="date" class="form-control" name="dob"
         >
         </div>


         <div class="form-group">
         <label for="exampleInputEmail1">Email Id</label>
         <input type="email" class="form-control" name="email_id">
         </div>

       

         <div class="form-group">
         <label for="exampleInputEmail1">Contact Number</label>
         <input type="text" class="form-control" name="contact_number"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">State</label>
         <input type="text" class="form-control" name="state"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">City</label>
         <input type="text" class="form-control" name="city"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Permanent Address</label>
         <input type="text" class="form-control" name="permanent_address"
         >
         </div>

         <div class="form-group">
         <label for="exampleInputEmail1">Education details</label>
         <input type="text" class="form-control" name="education_details"
         >
         </div>

  
         <button type="submit" class="btn btn-primary">Submit</button>

         </div>

         </div>

        </form>
        <!-- </form> -->



        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection