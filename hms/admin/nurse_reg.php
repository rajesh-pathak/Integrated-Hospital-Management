<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nurse Registration</title>
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
<body style="background-color:#C1E1A6">
	<div class="container">
		<div class="row">
			<form method="POST" action="nurse_reg1.php">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="form-group">
			  				<label for="n_name">Name:</label>
			 				<input type="text" class="form-control" name="n_name">
						</div>
						<div class="form-group">
			  				<label for="n_age">Age:</label>
			 				<input type="text" class="form-control" name="n_age">
						</div>
						<div class="form-group">
			  				<label for="n_contact">Contact No.:</label>
			 				<input type="text" class="form-control" name="n_contact">
						</div>
					</div>
					<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="form-group">
				  			<label for="n_password">Password:</label>
				 			<input type="text" class="form-control" name="n_password">
						</div>
						<div class="form-group" >
			  				<label for="n_gender">Gender:</label>
			 				<select class="form-control" name="n_gender">
			 					<option>Male</option>
			  					<option>Female</option>
			  				</select>
			  			</div>
						
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<br>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<button type="submit" value="submit" name="submit" class="btn btn-block btn-primary active">Add</button>
					</div>
				</div>
			</form>
			<br><br>
		</div>
	</div>
</body>