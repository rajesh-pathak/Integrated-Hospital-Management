<?php 
session_start();
if(!isset($_SESSION['email'])){
  

echo "<script>window.open('../index.php','_self')</script>";

}
include('../includes/connection.php');	
global $sum;
global $m1,$m2,$m3,$m4;
$id=$_GET['id'];
$q1="select medicine_cost from patient_details where id='$id'";
$r1=mysql_query($q1);
while($ra1=mysql_fetch_array($r1))
{
	$m1=$ra1[0];
}
$q2="select test_cost from patient_details where id='$id'";
$r2=mysql_query($q2);
while($ra2=mysql_fetch_array($r2))
{
	$m2=$ra2[0];
}
$qd1="SELECT * from patient_details where id='$id'";
$r3=mysql_query($qd1);
while($ra3=mysql_fetch_array($r3))
{
	$d1=$ra3['reg_date'];
	$d2=$ra3['discharge_date'];
	
	$datetime1 = date_create($d1);
	$datetime2 = date_create($d2);
	$interval = date_diff($datetime1, $datetime2);
	$m3=($interval->format('%R%a days'))*300;

/*	$m3=date_diff($d1,$d2);
	echo $m3->format('%R%a days');
*/}
	$m4=600;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout Bill</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>

<?php include("cashier_nav.php"); ?>
<body style="background-color:#C1E1A6">
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Bill Type</th>
        <th>Amount Payable</th>
      </tr>
    </thead>
    <tbody>
    <?php include('../includes/connection.php');?>
    <tr>
    	<th>Medicine Charges</th>
    	<td><?php echo $m1;?></td>
    </tr>
    <tr>
    	<th>Tests Charges</th>
    	<td><?php echo $m2;?></td>
    </tr>
    <tr>
    	<th>Room Charges</th>
    	<td><?php echo $m3;?></td>
    </tr>
    <tr>
    	<th>Doctor Charges</th>
    	<td><?php echo $m4;?></td>
    </tr>
    <tr>
      	<th>Total</th>
      	<td><?php echo $m1+$m2+$m3+$m4;?></td>
      </tr>
    
 <?php 
?>
</tbody>
</table>
</body>
</html>