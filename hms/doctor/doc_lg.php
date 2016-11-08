<?php 
session_start();
if(!isset($_SESSION['email'])){
  

echo "<script>window.open('../index.php','_self')</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Registration</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>

<?php include("doc_nav.php"); ?>
<body style="background-color:#C1E1A6">
<div class="container">
	<div class="row">
	       <div class="row">
				<div class="col-lg-2">
				   <img src="../image/download.jpe" width="100px" height="100px">

				</div>
				<div class="col-lg-8">
				   <h1><u>WELCOME TO MY PORTAL</h1>

				</div>
			</div><br><br><br><br>
			<div class="row">
			        <div class="col-lg-3">

			                 <form>
			                 	<div class="form-group">
		  				          <label for="p_name">Input Patient Name:</label>
		 				           <input type="text" class="form-control" id="p_name">
					            </div>
					            <button type="button" class="btn btn-block btn-success active">Search</button>
			                 </form>
			         </div>
			         <form>
			         <div class=" col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-4 col-md-4 col-sm-4 col-xs-4">
			               <div class="row">
			                    <div class="col-md-6">
                                     <img src="../image/download1.jpe" width="70px" height="70px">
                                  
                                </div>   
                              <div class=" col-md-offset-1 col-md-5">
				                   <h3><b><u>Patient Information</h3>
				                  
				               </div> 

			                </div>
			         </div> <br><br> </div> 



			 <div class="row">
			     <form>
          	        <div class="col-md-4">
                      
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                             <div class="col-lg-6">
				                    <div class="form-group">
								            <label for="p_id">PID:</label>
								           <input type="text" class="form-control" id="p_id">
						             </div>
						             <div class="form-group">
								           <label for="p_name">Patient Name:</label>
								           <input type="text" class="form-control" id="p_name">
						            </div>
						              <div class="form-group">
								          <label for="gen">Gender:</label>
								           <input type="text" class="form-control" id="gen">
						            </div>
						              <div class="form-group">
								          <label for="age">Age:</label>
								           <input type="text" class="form-control" id="age">
						            </div>
						             <div class="form-group">
								          <label for="dis">Disease:</label>
								           <input type="text" class="form-control" id="dis">
						            </div>
						       </div>
						       <div class=" col-lg-offset-1 col-lg-5">
				                    <div class="form-group">
								            <label for="r_no">Room No:</label>
								           <input type="text" class="form-control" id="r_no">
						             </div>
						             <div class="form-group">
								           <label for="contact">Contact No:</label>
								           <input type="text" class="form-control" id="contact">
						            </div>
						              <div class="form-group">
  						                 <label for="pres">Prescription:</label>
						                   <textarea class="form-control" rows="5" id="pres"></textarea>
					                  </div>
					                  <button type="button" class="btn btn-block btn-warning active">UPDATE</button>
						       </div>
				        </div>
                </div>   
 

                     
            </form>
	        </div>


   
</div>
</div>	
</html>