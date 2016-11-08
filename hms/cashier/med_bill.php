<?php 
session_start();
if(!isset($_SESSION['email'])){
  

echo "<script>window.open('../index.php','_self')</script>";

}
include('../includes/connection.php');	
global $sum;
global $m1,$m2,$m3,$m4;
global $i;
$id1=$_GET['id'];
if(isset($_POST['submit'])){

 
$m1=$_POST['m_id1'];
$m2=$_POST['m_id2'];
$m3=$_POST['m_id3'];
$m4=$_POST['m_id4'];
$q1=$_POST['q_id1'];
$q2=$_POST['q_id2'];
$q3=$_POST['q_id3'];
$q4=$_POST['q_id4'];
global $quantity, $midi;

//$quntity =array('$q1','$q2','$q3','$q4');
//$midi=array('$m1','$m2','$m3','$m4');

$qu1="select * from medicine where m_id='$m1'";
$r1=mysql_query($qu1);
while($ra1=mysql_fetch_array($r1)){
$sum=$sum+$q1*$ra1['m_rate'];
}
$qu2="select * from medicine where m_id='$m2'";
$r2=mysql_query($qu2);
while($ra2=mysql_fetch_array($r2)){
$sum=$sum+$q2*$ra2['m_rate'];
}
$qu3="select * from medicine where m_id='$m3'";
$r3=mysql_query($qu3);
while($ra3=mysql_fetch_array($r3)){
$sum=$sum+$q3*$ra3['m_rate'];
}
$qu4="select * from medicine where m_id='$m4'";
$r4=mysql_query($qu4);
while($ra4=mysql_fetch_array($r4)){
$sum=$sum+$q4*$ra4['m_rate'];
}
}
$query="update patient_details set medicine_cost='$sum' where id='$id1'";
$run=mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bill</title>
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
        <th>Serial No.</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
     
<?php
include('../includes/connection.php');
if(isset($_POST['submit'])){


$m1=$_POST['m_id1'];
$m2=$_POST['m_id2'];
$m3=$_POST['m_id3'];
$m4=$_POST['m_id4'];
$q1=$_POST['q_id1'];
$q2=$_POST['q_id2'];
$q3=$_POST['q_id3'];
$q4=$_POST['q_id4'];
}	
	/*echo $row;

	echo $m_id; echo $midi[1];
for($i=0;$i<count($midi);$i++)
	echo $m_id; echo $midi[$i];
if($row['m_id']==$midi[$i])*/
	$query="select * from medicine WHERE m_id='$m1'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$query2="select * from medicine WHERE m_id='$m2'";
	$run2=mysql_query($query2);
	$row2=mysql_fetch_array($run2);
	$query3="select * from medicine WHERE m_id='$m3'";
	$run3=mysql_query($query3);
	$row3=mysql_fetch_array($run3);
	$query4="select * from medicine WHERE m_id='$m4'";
	$run4=mysql_query($query4);
	$row4=mysql_fetch_array($run4);


?>
      <tr>
        <td><?php echo $row['m_id']?></td>
        <td><?php echo $row['m_name']?></td>
        <td><?php echo $q1?></td>
        <td><?php echo $q1*$row['m_rate'];?></td> 	
      </tr>
       <tr>
        <td><?php echo $row2['m_id']?></td>
        <td><?php echo $row2['m_name'];?></td>
        <td><?php echo $q2?></td>
        <td><?php echo $q2*$row2['m_rate']?></td>		
      </tr>
       <tr>
        <td><?php echo $row3['m_id']?></td>
        <td><?php echo $row3['m_name']?></td>
        <td><?php echo $q3?></td>
        <td><?php echo $q3*$row3['m_rate'];?></td> 	
      </tr>
       <tr>
        <td><?php echo $row4['m_id']?></td>
        <td><?php echo $row4['m_name']?></td>
        <td><?php echo $q4?></td>
        <td><?php echo $q4*$row4['m_rate'];?></td> 	
      </tr>
      <tr>
      	<td></td>
      	<td></td>
      	<th>Doctor Charges</th>
      	<td>300</td>
      </tr>
      <tr>
      	<td></td>
      	<td></td>
      	<th>Total</th>
      	<td><?php echo $sum?></td>
      </tr>
    
 <?php 
?>
</tbody>
</table>
</body>
</html>