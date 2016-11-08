<?php 
session_start();
if(!isset($_SESSION['email'])){
  

echo "<script>window.open('../index.php','_self')</script>";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cashier Home</title>
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

<?php include("cashier_nav.php"); 
if (isset($_POST['submit'])) {
 $p=$_POST['p_id'];



?>
<body style="background-color:#C1E1A6">
  <div class="container">
  	<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <br>
        <img src="../image/125626372.jpg" class="img-rounded" alt="Cinque Terre" width=120%; height=100%; repeat >
      </div>
      <div class=" col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <br>
        <a href="med_form.php?id=<?php echo $p;?>" class="btn btn-primary btn-block btn-responsive" role="button">Medicine Bill</a><br>
  			<a href="lab_test.php?id=<?php echo $p;?>" class="btn btn-primary btn-block btn-responsive" role="button" >Lab Test</a><br>
        <a href="checkout.php?id=<?php echo $p;?>" class="btn btn-primary btn-block btn-responsive" role="button">Checkout</a><br>
      </div> 
  	</div>
  </div>
</body>
<?php } ?>