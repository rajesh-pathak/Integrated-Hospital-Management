<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>

<div class="container-fluid">
	<div class="row">
	  	<img src="image/cover.jpg" style="width:100%;height:100%;" class="img-responsive" alt="HOSPITAL MANAGEMENT SYSTEM">
  	</div>
  	<div class="row" style="background-image: url(image/2.jpg);  width: 1349px; height: 100%; border: 1px solid black;">
	    <div class="row centered-form">
	    	<br><br>
	        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	        	<div class="panel panel-default" style="border:1px solid black">
	        		<div class="panel-heading">
				    	<h3 class="panel-title">Please Log-in</h3>
				 	</div>
				 	<div class="panel-body">
				    	<form role="form" method="POST" action="admin/admin_login.php">
				    	<div class="form-group">
							<select class="form-control" name="sel1" class="form-control input-sm" placeholder="User Type" required >
							    <option value="" disabled selected>User Type</option>
							    <option value="admin">Administrator</option>
							    <option value="cashier">Cashier</option>
							    <option value="doc">Doctor</option>
							    <option value="nurse">Nurse</option>
							</select>
							
						</div>
				    		<div class="form-group">
				    			<input type="text" name="email" id="email" class="form-control input-sm" placeholder="User ID" required>
				    		</div>
				    		<div class="form-group">
				    				<div class="form-group">
				    					<input type="password" name="password"  class="form-control input-sm" placeholder="Password" required>
				    				</div>
				    		</div>
				    		<input type="submit" value="Log-In" name="submit" class="btn btn-info btn-block">
				    	</form>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br>
	</div>
</div>
