<?php
  $column_val = array(
                  array(
                      "Emp_ID" => 6541,
                      "Emp_Name" => "Ashutosh Kumar",
                      "Company_Name" => "Naggaro",
                  ),
                  array(
                    "Emp_ID" => 6542,
                    "Emp_Name" => "Chandan Kumar",
                    "Company_Name" => "Newgen",
                  ),
                  array(
                    "Emp_ID" => 6543,
                    "Emp_Name" => "Vikash Kumar",
                    "Company_Name" => "QA",
                  ),
                  array(
                    "Emp_ID" => 6544,
                    "Emp_Name" => "Naveen Kumar",
                    "Company_Name" => "Samsung",
                  ),
                  array(
                    "Emp_ID" => 6545,
                    "Emp_Name" => "Madhu singh",
                    "Company_Name" => "Amazon",
                  )
                );
                $Emp_Name_Val=array_column($column_val,"Emp_Name");
                print_r($Emp_Name_Val);
                $Emp_details = array_column($column_val,"Company_Name","Emp_ID");
                print_r($Emp_details);
                echo $Emp_details;
?>