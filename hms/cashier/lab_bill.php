<?php 
session_start();
if(!isset($_SESSION['email'])){
  

echo "<script>window.open('../index.php','_self')</script>";

}
include('../includes/connection.php');	
global $sum;
global $m1,$m2,$m3,$m4;
$id1=$_GET['id'];
if(isset($_POST['submit'])){


$m1=$_POST['t_id1'];
$m2=$_POST['t_id2'];
$m3=$_POST['t_id3'];
$m4=$_POST['t_id4'];

//$quntity =array('$q1','$q2','$q3','$q4');
//$midi=array('$m1','$m2','$m3','$m4');

$qu1="select * from lab_report where t_id='$m1'";
$r1=mysql_query($qu1);
while($ra1=mysql_fetch_array($r1)){
$sum=$sum+$ra1['test_rate'];
}
$qu2="select * from lab_report where t_id='$m2'";
$r2=mysql_query($qu2);
while($ra2=mysql_fetch_array($r2)){
$sum=$sum+$ra2['test_rate'];
}
$qu3="select * from lab_report where t_id='$m3'";
$r3=mysql_query($qu3);
while($ra3=mysql_fetch_array($r3)){
$sum=$sum+$ra3['test_rate'];
}
$qu4="select * from lab_report where t_id='$m4'";
$r4=mysql_query($qu4);
while($ra4=mysql_fetch_array($r4)){
$sum=$sum+$ra4['test_rate'];
}
}
$query="update patient_details set test_cost='$sum' where id='$id1'";
$run=mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>lab report</title>
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
        <th>Test Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
     
<?php
include('../includes/connection.php');
if(isset($_POST['submit'])){


$m1=$_POST['t_id1'];
$m2=$_POST['t_id2'];
$m3=$_POST['t_id3'];
$m4=$_POST['t_id4'];

}	
	/*echo $row;

	echo $m_id; echo $midi[1];
for($i=0;$i<count($midi);$i++)
	echo $m_id; echo $midi[$i];
if($row['m_id']==$midi[$i])*/
	$query="select * from lab_report WHERE t_id='$m1'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$query2="select * from lab_report WHERE t_id='$m2'";
	$run2=mysql_query($query2);
	$row2=mysql_fetch_array($run2);
	$query3="select * from lab_report WHERE t_id='$m3'";
	$run3=mysql_query($query3);
	$row3=mysql_fetch_array($run3);
	$query4="select * from lab_report WHERE t_id='$m4'";
	$run4=mysql_query($query4);
	$row4=mysql_fetch_array($run4);
	$sum=$sum;

?>
      <tr>
        <td><?php echo $row['t_id']?></td>
        <td><?php echo $row['test_name']?></td>
        
        <td><?php echo $row['test_rate'];?></td> 	
      </tr>
       <tr>
        <td><?php echo $row2['t_id']?></td>
        <td><?php echo $row2['test_name'];?></td>
        
        <td><?php echo $row2['test_rate']?></td>		
      </tr>
       <tr>
        <td><?php echo $row3['t_id']?></td>
        <td><?php echo $row3['test_name']?></td>
        
        <td><?php echo $row3['test_rate'];?></td> 	
      </tr>
       <tr>
        <td><?php echo $row4['t_id']?></td>
        <td><?php echo $row4['test_name']?></td>
        
        <td><?php echo $row4['test_rate'];?></td> 	
      </tr>
     
      <tr>
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