<?php


include ('../includes/connection.php');


if(isset($_POST['submit'])) {
  
  $p_name = $_POST['p_name'];
  $p_age = $_POST['p_age'];
  $p_gender = $_POST['p_gender'];
  $p_contact = $_POST['p_contact'];
  $p_addr = $_POST['p_addr'];
  $reg_dt = $_POST['reg_dt'];
 

  if($p_name=='' OR $p_age=='' OR $p_gender=='' OR $p_contact=='' OR $p_addr=='' OR $reg_dt==''){
    echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('pat_reg.php','_self')</script>";
  }


 $insert_patient="insert into patient_details(name,age,address,contact,gender,reg_date) values('$p_name','$p_age','$p_addr','$p_contact','$p_gender','$reg_dt')";
    
  if(  $run_post=mysql_query($insert_patient))
  	echo "<script>alert('Registration Successfull')</script>";
  	echo "<script>window.open('pat_reg.php','_self')</script>";

}






?>