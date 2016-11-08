<?php 
include('../includes/connection.php');
if(isset($_POST['submit'])) {
	$id=$_GET['pid'];
	$date=$_POST['appt'];
	$query="update patient_details set appointment_date='$date' where id='$id' ";
	if(mysql_query($query)){
	  header("location:pat_det.php");
	}
}