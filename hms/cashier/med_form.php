<?php 
session_start();
if(!isset($_SESSION['email'])){
  

echo "<script>window.open('../index.php','_self')</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Medicine Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>

<?php include("cashier_nav.php"); ?>
<?php $id1=$_GET['id'];?>
<body style="background-color:#C1E1A6">
	<div class="container">
	  <div class="row">
		<div class="row">
			<form method="POST" action="med_bill.php?id=<?php echo $id1;?>">
				
				<div class="col-lg-4">
						
						<div class="form-group">
			  				<label for="d_name">Medicine Id:</label>
			 				<input type="text" class="form-control" name="m_id1">
						</div>
						<div class="form-group">
			  				<label for="d_name">Medicine Id:</label>
			 				<input type="text" class="form-control" name="m_id2">
						</div>
						<div class="form-group">
			  				<label for="d_name">Medicine Id:</label>
			 				<input type="text" class="form-control" name="m_id3">
						</div>
						<div class="form-group">
			  				<label for="d_name">Medicine Id:</label>
			 				<input type="text" class="form-control" name="m_id4">
						</div>

				</div>
				<div class="col-lg-3"></div>
				<div class="col-lg-5">
						<div class="form-group">
				  			<label for="d_id">Quantity:</label>
				 			<input type="text" class="form-control" name="q_id1">
						</div>
						<div class="form-group">
				  			<label for="d_id">Quantity:</label>
				 			<input type="text" class="form-control" name="q_id2">
						</div>
						<div class="form-group">
				  			<label for="d_id">Quantity:</label>
				 			<input type="text" class="form-control" name="q_id3">
						</div>
						<div class="form-group">
				  			<label for="d_id">Quantity:</label>
				 			<input type="text" class="form-control" name="q_id4">
						</div>
			</div></div><br><br>
		
				
				<div class="row">
				    <div class="col-lg-4"></div>
				    <div class="col-lg-4"></div>
					<div class="col-lg-4">
						<input type="submit" name="submit" class="btn btn-block btn-success active"/>
					</div>
					
				</div>
			</form>
			
		</div>
		</div>
	</div>
</body>