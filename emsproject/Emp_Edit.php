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

 if(isset($_GET['p_id'])){

     $key_id = $_GET['p_id'];

 }
  
      $query = "SELECT * FROM emp_table WHERE emp_id = $key_id";
      $select_emp_by_id = mysqli_query($connection, $query);
      while($row = mysqli_fetch_assoc($select_emp_by_id)){

         $emp_image = $row['emp_image'];
         //$emp_id = $row['emp_id'];
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

       } //move_uploaded_file($image_temp, "/images/$image");

 
       if(isset($_POST['Update_emp'])){
  
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


         $query = "UPDATE emp_table SET ";
         $query .= "emp_image = '{$image}', ";
         $query .= "emp_id = '{$key_id}', ";
         $query .= "emp_name = '{$name}', ";
         $query .= "father_name = '{$father_name}', ";
         $query .= "emp_id = '{$key_id}', ";
         $query .= "emp_dob = now(), ";
         $query .= "emp_doj = now(), ";
         $query .= "designation = '{$designation}', ";
         $query .= "skill = '{$skill}', ";
         $query .= "gender = '{$gender}', ";
         $query .= "email = '{$email}', ";
         $query .= "contact_no = '{$contact_no}', ";
         $query .= "emp_address = '{$emp_address}' ";
         $query .= "WHERE emp_id = {$key_id} ";


         mysqli_query($connection, $query);

       }


       if(isset($_GET['delete'])){
         $K_id = $_GET['delete'];

       $query = "DELETE FROM emp_table WHERE emp_id = {$K_id} ";
       $delete_query = mysqli_query($connection, $query);
       header("Location: employee_details.php");  

       }
 


?>



<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
</br>
    <input type="file" name="image"/></br>
   <img width="100" src="images/<?php echo $emp_image; ?>" alt=""/>
</div>

<div class="form-group">
</br>
   <label for="name">Name</label></br>
   <input   value="<?php  echo $emp_name;  ?>" type="text" class="form-control" name="name" required></br>
</div>

<div class="form-group">
</br>
   <label for="father_name">Father's Name</label></br>
   <input value="<?php  echo $father_name;  ?>"  type="text" class="form-control" name="father_name" required></br>
</div>

<div class="form-group">
</br>
   <label for="dob">DOB</label></br>
   <input value="<?php  echo $emp_dob;  ?>"  type="date" class="form-control" name="dob" required></br>
</div>

<div class="form-group">
</br>
   <label for="gender">Gender</label></br>
   <input value="<?php  echo $gender;  ?>" type="text" class="form-control" name="gender" required></br>
</div>

<div class="form-group">
</br>
   <label for="doj">DOJ</label></br>
   <input value="<?php  echo $emp_doj;  ?>" type="date" class="form-control" name="doj" required></br>
</div>

<div class="form-group">
</br>
   <label for="designation">Designation</label></br>
   <input value="<?php  echo $designation;  ?>" type="text" class="form-control" name="designation" required></br>
</div>

<div class="form-group">
</br>
   <label for="skill">Skill</label></br>
   <input value="<?php  echo $skill;  ?>" type="text" class="form-control" name="skill" required></br>
</div>

<div class="form-group">
</br>
   <label for="email">Email Id</label></br>
   <input value="<?php  echo $email;  ?>" type="email" class="form-control" name="email" required></br>
</div>

<div class="form-group">
</br>
   <label for="contact_no">Contact No.</label></br>
   <input value="<?php  echo $contact_no;  ?>" type="text" class="form-control" name="contact_no" required></br>
</div>


<div class="form-group">
</br>
   <label for="emp_address">Post Content</label></br>
   <textarea class="form-control" name="emp_address" id="body" cols="20" rows="10" required>
   <?php  echo $emp_address;  ?>
    </textarea></br></br>
</div>

<div class="form-group">
   
   <input class = "btn btn-primary" type="submit"  name="Update_emp" value="Update"/>
</div>



</form>

