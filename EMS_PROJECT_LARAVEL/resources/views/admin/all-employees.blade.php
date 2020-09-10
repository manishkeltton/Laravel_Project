
@extends('admin.master');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
            <form action="{{ url('/search') }}" method="get" role="search">
               
               <div class="input-group input-group-sm">
       
               <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" 
                 aria-label="Search">
              <div class="input-group-append">
               <button class="btn btn-navbar" type="submit">
                 <i class="fas fa-search"></i>
                </button>
            </div>
         </div>
              
         </form>
                </li>
      
     

      <li>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
  
              <label class="btn btn-secondary active">
              <input type="radio" name="optradio1" value="1" id="option1" autocomplete="off" checked> Active
             </label>

              <label class="btn btn-secondary active">
               <input type="radio" name="optradio2" id="option2" autocomplete="off"> InActive
              </label>
           </div>
           </li>
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Employees</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        @if (session('success'))
          <div class="alert alert-success">
             {{ session('success') }}
          </div>
        @endif

  @if(isset($employees_data)) 
          <table class="table">
     <thead>
    <tr>
      <th scope="col">Employee Image</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>   
      <th scope="col">Joining Date</th>
      <th scope="col">Designation</th>
      <th scope="col">Employee Id</th>
      <th scope="col">Employee Status</th>
      <th scope="col">Edit</th>
   

    </tr>
  </thead>
  <tbody>
    
  @foreach($employees_data as $employee)
    <tr>
      <td><img src="{{url('/images')}}/{{$employee['employee_image']}}" width="100" ></td>
      <td>{{ $employee['employee_first_name'] }}</td>
      <td>{{ $employee['employee_last_name'] }}</td>
      <td>{{ $employee['employee_joining_date'] }}</td>
      <td>{{ $employee['employee_designation'] }}</td>
      <td>{{ $employee['employee_id'] }}</td>
      <td>{{ $employee['employee_status'] }}</td>
     
      <td><a href="{{ URL::to('/') }}/edit/{{ $employee['employee_id'] }}" class="btn btn-primary">Edit</a></td>
    
    </tr>
    @endforeach
   
    
  </tbody>
</table>
<?php echo $employees_data->render(); ?>

@else
 {{ $title }}

@endif



        </div>
        <!-- /.row (main row) -->
     
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection