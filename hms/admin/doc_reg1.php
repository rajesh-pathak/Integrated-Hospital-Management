<?php


include ('../includes/connection.php');


if(isset($_POST['submit'])) {
  
  $doc_name = $_POST['d_name'];
  $doc_age = $_POST['d_age'];
  $doc_gender = $_POST['d_gender'];
  $doc_contact = $_POST['d_contact'];
  $doc_dept = $_POST['d_dept'];
  $pwd=$_POST['d_password'];
echo $doc_name;
  if($doc_name=='' OR $doc_age=='' OR $doc_gender=='' OR $doc_contact=='' OR $doc_dept=='' OR $pwd==''){
    echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('doc_reg.php','_self')</script>";
  }


 $insert_doctor="insert into doctor(doc_name,doc_age,doc_contact,doc_gender,doc_dept,doc_password) values('$doc_name','$doc_age','$doc_contact','$doc_gender','$doc_dept','$pwd')";
    
  if(  $run_post=mysql_query($insert_doctor))
  	echo "<script>alert('Registration Successfull')</script>";
  	echo "<script>window.open('doc_reg.php','_self')</script>";

}






?>