<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Registraton</title>
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
<?php include("admin_nav.php"); ?>
<?php
include('../includes/connection.php');
$query="select r_num from room where status='V'";
$result=mysql_query($query);
?>
<body style="background-color:#C1E1A6">
	<div class="container">
		<div class="row">
			<form method="POST" action="pat_reg1.php">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="form-group">
			  				<label for="p_name">Name:</label>
			 				<input type="text" class="form-control" name="p_name">
						</div>
						<div class="form-group">
			  				<label for="p_age">Age:</label>
			 				<input type="text" class="form-control" name="p_age">
						</div>
						<div class="form-group" >
			  				<label for="p_gender">Gender:</label>
			 				<select class="form-control" name="p_gender">
			 					<option>Male</option>
			  					<option>Female</option>
			  				</select>
						</div>
						<div class="form-group">
			  				<label for="p_contact">Contact No.:</label>
			 				<input type="text" class="form-control" name="p_contact">
						</div>
						<div class="form-group" >
			  				<label for="p_room">Room:</label>
			 				<select class="form-control" name="p_room">
			 				<?php
			 			//	$select= '<select name="select">'; 
			 				while ($line = mysql_fetch_array($result)) 
			 					{
			 						?>
			 					<option value="<?php echo $line['r_num'];?>"> <?php echo $line['r_num'];?></option>
			 				<?php } ?>	
			  				</select>
						</div>
					</div>
					<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="form-group">
	  						<label for="p_addr">Address:</label>
							<textarea class="form-control" rows="5" name="p_addr"></textarea>
						</div>
						<div class="form-group">
			  				<label for="reg_dt">Reg Date:</label>
			 				<input type="date" class="form-control" name="reg_dt">
						</div>
						<div class="form-group">
			  				<label for="d_id">Doctor assigned:</label>
			 				<input type="text" class="form-control" name="d_id">
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<button type="submit" value="submit" name="submit" class="btn btn-block btn-primary active">Add</button>
					</div>
					<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<button type="reset" class="btn btn-block btn-danger active">Reset</button>
					</div>
				</div>
			</form>
			<br><br>
		</div>
	</div>
</body>
