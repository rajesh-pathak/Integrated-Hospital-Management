<?php
session_start();
include('../includes/connection.php');
if(!$_SESSION['email'])
{
	header("location:../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>patient Details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  
 <style>
  	th {
    background-color: #4CAF50;
	}
	tr:nth-child(even) {background:#E9E581}
	tr:nth-child(odd) {background: #FFF}
  </style>
</head>

<?php include("doc_nav.php"); ?>
<body style="background-color:#C1E1A6">
<body style="background-color:#C1E1A6">
<div class="container">
	<div class="row">
	     
	     
	      <div class="row">
	       <div class="col-lg-2">
	           
	        </div>
	        <div class="col-lg-2">
	            <p> <img src="../image/download1.jpe" width="70px" height="70px">   
	         </p>

	         </div>
	           <div class="col-lg-5">
	            <h3><b><u>Patient Information</u></b></h3></p>
	         </div>
	          
	         
	         </div> <br>
	         <div class="row">
	         	 <?php $id=$_SESSION['email'];
	         	 $query="select * from patient_details where doc_id='$id'";
	         	 $run=mysql_query($query);
	       ?>  	 



	         	  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Patient Id.</th>
			        <th>Name</th>
			        <th>Age</th>
			        <th>Address</th>
			        <th>Contact No.</th>
			        <th>Gender</th>
			        <th>Reg Date</th>
			        <th>Room No.</th>
			        <th>Appointment On</th>
			        <th></th>
			      </tr>
			    </thead>
			 <tbody>
			 <?php
			   while($row=mysql_fetch_array($run))
	         	 {	
	         	 	?>
	         	 	<tr>
	         	 	<td><?php echo $row[0]?></td>
	         	 	<td><?php echo $row[1]?></td>
	         	 	<td><?php echo $row[2]?></td>
	         	 	<td><?php echo $row[3]?></td>
	         	 	<td><?php echo $row[4]?></td>
	         	 	<td><?php echo $row[5]?></td>
	         	 	<td><?php echo $row[6]?></td>
	         	 	<td><?php echo $row[9]?></td>
	         	 	<td><?php echo $row[10]?></td>
	         	 	<td><a href="pat_det_update.php?var_id=<?php echo $row[0];?>" class="btn btn-success btn-block btn-responsive" role=button>Update</a></td>
	         	 	</tr>
	         	 	
	         	 	</tbody>
	         	 	<?php }?>




			    
			   </table>
	         </div>
	         


	         </div></div></body> 

  
	       