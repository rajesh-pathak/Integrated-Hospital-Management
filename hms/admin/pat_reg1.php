<?php


include ('../includes/connection.php');


if(isset($_POST['submit'])) {
  
  $p_name = $_POST['p_name'];
  $p_age = $_POST['p_age'];
  $p_gender = $_POST['p_gender'];
  $p_contact = $_POST['p_contact'];
  $p_addr = $_POST['p_addr'];
  $reg_dt = $_POST['reg_dt'];
  $doc_id = $_POST['d_id'];
  $room_no= $_POST['p_room'];

  if($room_no=='' OR $p_name=='' OR $p_age=='' OR $p_gender=='' OR $p_contact=='' OR $p_addr=='' OR $reg_dt=='' OR $doc_id==''){
    echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('pat_reg.php','_self')</script>";
  }


 $insert_patient="insert into patient_details(name,age,address,contact,gender,reg_date,doc_id,room_num) values('$p_name','$p_age','$p_addr','$p_contact','$p_gender','$reg_dt','$doc_id','$room_no')";
 $query="select * from patient_details where room_num='$room_no'";
 $result=mysql_query($query);
 $r=mysql_fetch_array($result);
 $ro=$r['id'];
    $room_update="update room set status='F' where r_num='$room_no'";
    $room_update1="update room set p_id='$ro' where r_num='$room_no'";
  if(  $run_post=(mysql_query($insert_patient)) and $run1=(mysql_query($room_update) )and $run2=(mysql_query($room_update1)))
    echo "<script>alert('Registration Successfull')</script>";
    echo "<script>window.open('pat_reg.php','_self')</script>";

}






?>