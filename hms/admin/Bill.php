<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bill</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  	th {
    background-color: #4CAF50;
	}
	tr:nth-child(even) {background:#E9E581}
	tr:nth-child(odd) {background: #FFF}
  </style>
</head>
<body style="background-color:#C1E1A6">
<?php include("admin_nav.php"); ?>
<div class="container">
   
	 <div class="row">
		<form>
		    <div class="row">
		       <h1 class="text-center">Bill</h1>
		         <div class ="col-lg-5 col-md-5 col-sm-5 col-xs-5">
		       	   <div class="form-group">
		  				<label for="Bill No.">BILL NO.:</label>
		 				<input type="text" class="form-control" id="Bill No">
					</div>
		         </div>
		        <div class ="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
		       	   <div class="form-group">
		  				<label for="Date">DATE:</label>
		 				<input type="date" class="form-control" id="Date">
					</div>
		       </div>
		       
		    </div><br><br><br><br>
		    <div class="row">
		       <h3>Patient's Details:</h3>
		     
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<div class="form-group">
		  				<label for="p_name">NAME:</label>
		 				<input type="text" class="form-control" id="p_name">
					</div>
					<div class="form-group">
		  				<label for="p_age">AGE:</label>
		 				<input type="text" class="form-control" id="p_age">
					</div>
					<div class="form-group" >
		  				<label for="p_gender">GENDER:</label>
		 				<select class="form-control" id="p_gender">
		 					<option>Male</option>
		  					<option>Female</option>
		  				</select>
					</div>
					<div class="form-group">
		  				<label for="p_contact">CONTACT NO.:</label>
		 				<input type="text" class="form-control" id="p_contact">
					</div>
				</div>
				<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<br><br><br><br><br><br><br>
					<div class="form-group">
		  				<label for="date_admiss">DATE OF REGISTRATION:</label>
		 				<input type="date" class="form-control" id="date_admiss">
					</div>
					<div class="form-group">
		  				<label for="date_dis">DATE OF DISCHARGE:</label>
		 				<input type="date" class="form-control" id="date_dis">
					</div>
				</div>
			</div>
		    </div> 
		    <br><br>
		    <div class="row">
		       <h3>CHARGES:</h3>
		     
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<div class="form-group">
		  				<label for="room_chg">ROOM CHARGE:</label>
		 				<input type="text" class="form-control" id="room_chg">
					</div>
					
					<div class="form-group" >
		  				<label for="p_gender">DOCTOR FEES:</label>
		 				<input type="text" class="form-control" id="doc_fee">
		 					
					</div>
					<div class="form-group">
		  				<label for="path">PATHOLOGY.:</label>
		 				<input type="text" class="form-control" id="path">
					</div>
				</div>
				<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
					
					<div class="form-group">
		  				<label for="miss">MISCELLANEOUS:</label>
		 				<input type="text" class="form-control" id="miss">
					</div>
					
				</div>
			</div>
		    </div> 
		    <div class="row">

		       

		    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
		    	<h3>TOTAL:</h3>
		    	<div class="form-group">
		  				<label for="tot"></label>
		 				<input type="text" class="form-control" id="tot">
				</div>
				</div><br>

				<div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-5 col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<button type="button" class="btn btn-block btn-primary active">Print</button>
				</div>

		    </div><br>                                                                                                                                            

		</form>
        <br>
        <div class="well">
	        <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Bill No.</th>
			        <th>Date</th>
			        <th>Name</th>
			        <th>Age</th>
			        <th>Genger</th>
			        <th>contact No.</th>
			        <th>Total</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      	<td>1</td>
			      	<td>12.06.2016</td>
			        <td>John</td>
			        <td>21</td>
			        <td>Male</td>
			        <td>9848473820</td>
			        <td>5048</td>
			      </tr>
			      <tr>
			      	<td>2</td>
			      	<td>13.06.2016</td>
			        <td>Marry</td>
			        <td>21</td>
			        <td>Feamle</td>
			        <td>9248453867</td>
			         <td>7048</td>
			      </tr>
			      <tr>
			      	<td>3</td>
			      	<td>23.06.2016</td>
			        <td>Raghu</td>
			        <td>28</td>
			        <td>Male</td>
			        <td>9920458376</td>
			         <td>17048</td>
	      		  </tr>
	    		</tbody>
	  		</table>
	  	</div>
   </div>   
 </div></body>