<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor Details</title>
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
	<div class="container">
		<div class="row">
			<form>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="form-group">
			  				<label for="d_name">Name:</label>
			 				<input type="text" class="form-control" id="d_name">
						</div>
						<div class="form-group">
			  				<label for="d_age">Age:</label>
			 				<input type="text" class="form-control" id="d_age">
						</div>
						<div class="form-group">
			  				<label for="d_contact">Contact No.:</label>
			 				<input type="text" class="form-control" id="d_contact">
						</div>
					</div>
					<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<div class="form-group">
				  			<label for="d_id">Password:</label>
				 			<input type="text" class="form-control" id="d_id">
						</div>
						<div class="form-group" >
			  				<label for="d_gender">Gender:</label>
			 				<select class="form-control" id="d_gender">
			 					<option>Male</option>
			  					<option>Female</option>
			  				</select>
			  			</div>
						<div class="form-group" >
			  				<label for="d_gender">Department:</label>
			 				<select class="form-control" id="d_gender">
			 					<option>Physician</option>
			  					<option>Surgeon</option>
			  				</select>
			  			</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<button type="button" class="btn btn-block btn-success active">Search</button>
					</div>
					<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<button type="button" class="btn btn-block btn-primary active">Add</button>
					</div>
					<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<button type="button" class="btn btn-block btn-danger active">Delete</button>
					</div>
				</div>
			</form>
			<br><br>
		</div>
	</div>
</body>