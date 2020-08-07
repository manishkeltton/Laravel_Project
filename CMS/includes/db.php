<?php

  $db['db_host'] = "localhost";
  $db['db_user'] = "root";
  $db['db_pass'] = "root@123";
  $db['db_name'] = "CMS";

  foreach($db as $key => $value){
    define(strtoupper($key),$value);
  }

  try{
  $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  }
   catch(Exception $e){
     echo $e->getMessage() ;
   }
 /*  finally{

   if($connection){
     echo "We are connected pk";
   }
    }
*/
?>