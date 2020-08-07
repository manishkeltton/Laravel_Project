<?php		

   echo "Basic Details: <br>";
   echo  $_POST['name'].'<br>';
   echo  $_POST['age'].'<br>';
   echo  $_POST['Gender'].'<br>';
   echo  $_POST['Occup'].'<br>';
   echo "Professional Details: <br>";
   echo  $_POST['Occupation'].'<br>';
   echo  $_POST['Company'].'<br>';
   echo  $_POST['Design'].'<br>';

   $uname = $_POST['name'];
   $age = $_POST['age'];
   $Gender = $_POST['Gender'];
   $occup = $_POST['Occup'];
   $occp = $_POST['Occupation'];
   $Comp = $_POST['Company'];
   $Des = $_POST['Design'];
   $arr_val = array($uname,$age,$Gender,$occp,$occup,$Comp,$Des);

   foreach($arr_val as $value){
   echo $value;
   }


  
?>
