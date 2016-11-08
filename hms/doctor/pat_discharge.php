<?php 
include('../includes/connection.php');

	$id=$_GET['p_id'];
	$date=date("y-m-d");

	$query="update patient_details set discharge_date='$date' where id='$id' ";
	
	$run=mysql_query($query);
	//echo $run;
		$query1="update room set status='V' where p_id='$id'";
		$query2="update room set p_id='0' where p_id='$id'";
		$query3="update patient_details set doc_id='0' where id='$id'";
		$query4="update patient_details set room_num='0' where id='$id'";
		if(mysql_query($query1) AND mysql_query($query2) AND mysql_query($query3) AND mysql_query($query4)){
		   echo "<script>alert('Patient Discharged')</script>";
           echo "<script>window.open('pat_det.php','_self')</script>";
			//header("location:pat_det.php");
		
	  
	}
	?>
