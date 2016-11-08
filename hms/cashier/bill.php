<?php 
session_start();
if(!isset($_SESSION['email'])){
  

echo "<script>window.open('../index.php','_self')</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cashier</title>
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
<?php include("cashier_nav.php"); ?>
<body style="background-color:#C1E1A6">
  <div class=row>
      <div class="col-lg-4 col-md-4 col-sm-4">
      <br>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <br><br><br>
        <form method="POST" action="cashier.php">
          <div class="form-group">
            <label for="p_id">Patient's ID:</label>
            <input type="text" class="form-control" name='p_id'>
          </div>
         <input type="submit" value="Submit" name="submit" class="btn btn-success btn-block btn-responsive" role=button/><br>
        </form>
      </div>
  </div>
</body>