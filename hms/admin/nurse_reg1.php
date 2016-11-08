<?php


include ('../includes/connection.php');


if(isset($_POST['submit'])) {
  
  $nur_name = $_POST['n_name'];
  $nur_age = $_POST['n_age'];
  $nur_gender = $_POST['n_gender'];
  $nur_contact = $_POST['n_contact'];
  
  $pwd=$_POST['n_password'];

  if($nur_name=='' OR $nur_age=='' OR $nur_gender=='' OR $nur_contact=='' OR $pwd==''){
    echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('nurse_reg.php','_self')</script>";
  }

  echo $nur_name;
 $insert_nurse="insert into nurse(nurse_name,nurse_age,nurse_contact,nurse_gender,nurse_paswd) values('$nur_name','$nur_age','$nur_contact',
 '$nur_gender','$pwd')";
    
  if(  $run_post=mysql_query($insert_nurse))
  	echo "<script>alert('Registration Successfull')</script>";
  	echo "<script>window.open('nurse_reg.php','_self')</script>";

}






?>