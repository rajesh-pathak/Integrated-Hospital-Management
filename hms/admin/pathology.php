<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pathology</title>
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
  
</head><body style="background-color:#C1E1A6">
<body style="background-color:#F4E2D8">
<?php include("admin_nav.php"); ?>
<div class="container">
	<div class="row">
	   
		<form>
			<div class="row">
			 <u><h2 class="text-center">PATHOLOGY</h2></u><br>

			    <div class="col-md-5">
			    	<div class="form-group">
		  				<label for="p_name">NAME:</label>
		 				<input type="text" class="form-control" id="p_name">
					</div><br>
					<div class="form-group">
		  				<label for="p_age">AGE:</label>
		 				<input type="text" class="form-control" id="p_age">
					</div><br>
					<div class="form-group" >
		  				<label for="p_gender">GENDER:</label>
		 				<select class="form-control" id="p_gender">
		 					<option>Male</option>
		  					<option>Female</option>
		  				</select>
					</div><br>
					<div class="form-group" >
		  				<label for="t_name">TEST NAME:</label>
		 				<select class="form-control" id="t_name">
		 					<option>Test 1</option>
		  					<option>Test 2</option>
		  					<option>Test 3</option>
		  				</select>
		  			</div>
		  		</div>
		  	
		  		<div class="col-md-offset-2 col-md-5 ">
		  			 <div class="form-group">
		  				<label for="p_id">PATIENT ID:</label>
		 				<input type="text" class="form-control" id="p_id">
					</div><br>
		  			    <div class="form-group">
  						  <label for="des_crp">DESCRIPITION:</label>
						  <textarea class="form-control" rows="5" id="des_crp"></textarea>
					    </div><br>
					 </div>	

			    </div>
			</div><br><br><br><br>
			 <div class="row">
				<div class="col-md-4">
					<button type="button" class="btn btn-block btn-info active">ADD</button>
				</div>
			
				<div class="col-md-4">
					<button type="button" class="btn btn-block btn-success active">SAVE</button>
				</div>
				
				<div class="col-md-4">
					<button type="button" class="btn btn-block btn-danger active">EXIT</button>
				</div>
			</div>            
		</form>
	</div>
</div>

</body>
