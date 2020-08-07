<table class="table table-bordered table-hover">
                    
                    <thead>
                       <tr>
                          <th>Emp_Image</th>
                          <th>Emp_Id</th>
                          <th>Emp_Name</th>
                          <th>Father_Name</th>
                          <th>Emp_Dob</th>
                          <th>Emp_Doj</th>
                          <th>Designation</th>
                          <th>Skill</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Contact NO</th>
                          <th>Emp_address</th>
                          <th>view</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                     </thead>  


                     <tbody>
                          
    <?php


        //  include("delete_model.php");

        ini_set ("display_errors", "1");
        error_reporting(E_ALL);

        $db['db_host'] = "localhost";
        $db['db_user'] = "root";
        $db['db_pass'] = "root@123";
        $db['db_name'] = "EMS";

foreach($db as $key => $value){
  define(strtoupper($key),$value);
}

// try{
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

         $query = "SELECT * FROM emp_table";
         $select_emp = mysqli_query($connection, $query);
         while($row = mysqli_fetch_assoc($select_emp)){
         $emp_image = $row['emp_image'];
         $emp_id = $row['emp_id'];
         $emp_name = $row['emp_name'];
         $father_name = $row['father_name'];
         $emp_dob = $row['emp_dob'];
         $emp_doj = $row['emp_doj'];
         $designation = $row['designation'];
         $skill = $row['skill'];
         $gender = $row['gender'];
         $email = $row['email'];
         $contact_no = $row['contact_no'];
         $emp_address = $row['emp_address'];
       
         echo "<tr>";
         echo "<td><img width='50' src='images/$emp_image' alt='image'></td>";

          echo "<td>$emp_id</td>";
          echo "<td>$emp_name</td>";
          echo "<td>$father_name</td>";
          echo "<td>$emp_dob</td>" ;
          echo "<td>$emp_doj</td>";
         // echo "<td>$post_tags</td>";
          echo "<td>$designation</td>";
          echo "<td>$skill</td>";
          echo "<td>$gender</td>";
          echo "<td>$email</td>";
          echo "<td>$contact_no</td>";
          echo "<td>$emp_address</td>";
         // echo "<td><a href='../post.php?p_id={$post_id}'>View Post</a></td>";
          echo "<td><a href='' >Edit</a></td>";
        //   echo "<td><a onClick=\" javascript: return confirm('Are you sure you want to delete')\" 
        //   href='posts.php?delete={$post_id}' >Delete</a></td>";
          echo "</tr>";
         }
           
  ?>              

                </tbody>     

</table>