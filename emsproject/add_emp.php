<?php  

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
// }
//  catch(Exception $e){
//    echo $e->getMessage() ;
//  }

 if(isset($_POST['create_post'])){


   //  try{
   //     echo "Hi Hello";
   //    print_r($_POST);
   //      print_r($_FILES);
   //     exit;
   //  }catch(Exception $e){
   //    echo $e->getMessage() ;
   //  }
   

    echo "Manish";

     $image = $_FILES['image']['name'];
     $image_temp = $_FILES['image']['tmp_name'];
     $name = $_POST['name'];
     $father_name = $_POST['father_name'];
     $dob = date('d-m-y');
     $doj = date('d-m-y');
     $designation = $_POST['designation'];
     $skill = $_POST['skill'];
     $gender = $_POST['gender'];
     $email = $_POST['email'];
     $contact_no = $_POST['contact_no'];
     $emp_address = $_POST['emp_address'];
     //$post_date = date('d-m-y');
     //$post_comment_count = 4;
     echo $dob;


     //move_uploaded_file($image_temp, "/images/$image");

     $query = "INSERT INTO emp_table(emp_image, emp_name, father_name, 
     emp_dob, emp_doj, designation, skill, gender, email, contact_no, emp_address) ";
    
 $query .= "VALUES('{$image}', '{$name}', '{$father_name}', 
     now(), now(), '{$designation}', '{$skill}', '{$gender}', '{$email}', {$contact_no}, 
     '{$emp_address}' )";

   //   $query .= "VALUES('{$image}', 1, '{$name}', '{$father_name}', 
   //   '{$dob}', '{$doj}', '{$designation}', '{$skill}', '{$gender}', '{$email}', '{$contact_no}' ), 
   //   '{$emp_address}' )";


      //  if(mysqli_query($connection, $query)){
      //      echo "PK";

      //  }

       if(mysqli_query($connection, $query)){
         echo "Records added successfully.";
     } else{
         echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
     }

      //confirmQuery($create_post_query);

          $key_id = mysqli_insert_id($connection);
        //  echo $key_id;

      echo "<p class='bg-success'><a href='add_emp.php?p_id={$key_id}'>Edit</a></p>";

     // confirmQuery($create_post_query);


 }


?>



<form action="add_emp.php" method="post" enctype="multipart/form-data">

<div class="form-group">
</br>
  <label for="image">Image</label>
  <input type="file" name="image" required></br>
</div>

<div class="form-group">
</br>
   <label for="name">Name</label>
   <input type="text" class="form-control" name="name" required></br>
</div>

<div class="form-group">
</br>
   <label for="father_name">Father's Name</label>
   <input type="text" class="form-control" name="father_name" required></br>
</div>

<div class="form-group">
</br>
   <label for="dob">DOB</label>
   <input type="date" class="form-control" name="dob" required></br>
</div>

<div class="form-group">
</br>
   <label for="gender">Gender</label>
   <input type="text" class="form-control" name="gender" required></br>
</div>

<div class="form-group">
</br>
   <label for="doj">DOJ</label>
   <input type="date" class="form-control" name="doj" required></br>
</div>

<div class="form-group">
</br>
   <label for="designation">Designation</label>
   <input type="text" class="form-control" name="designation" required></br>
</div>

<div class="form-group">
</br>
   <label for="skill">Skill</label>
   <input type="text" class="form-control" name="skill" required></br>
</div>

<div class="form-group">
</br>
   <label for="email">Email Id</label></br>
   <input type="email" class="form-control" name="email" required></br>
</div>

<div class="form-group">
</br>
   <label for="contact_no">Contact No.</label>
   <input type="text" class="form-control" name="contact_no" required></br>
</div>


<div class="form-group">
</br>
   <label for="emp_address">Post Content</label>
   <textarea class="form-control" name="emp_address" id="body" cols="20" rows="10" required>
    </textarea></br></br>
</div>

<div class="form-group">
   
   <input class = "btn btn-primary" type="submit"  name="create_post" value="Add_Emp"/>
</div>



</form>

