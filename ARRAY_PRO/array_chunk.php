<?php 
    $chunk_arr = array("sandeep","pradeep","shivam","ashutosh","prabhakar");
    print_r(array_chunk($chunk_arr,2));
    print_r(array_chunk($chunk_arr,2,true));
?>