<?php 
session_start();
if(!isset($_SESSION['email'])){
  
$sum=0;
echo "<script>window.open('../index.php','_self')</script>";

}
if(!empty($_POST['m_id1'] ) and !empty($_POST['q_id1']))
{
	$m1=$_POST['m_id1'];
	$q1=$_POST['q_id1'];
	$query="select * from medicine where m_id='m_id1'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$sum=$sum+$q1*$row[2];
}
if(!empty($_POST['m_id2'] ) and !empty($_POST['q_id2']))
{
	$m2=$_POST['m_id2'];
	$q2=$_POST['q_id2'];
	$query="select * from medicine where m_id='m_id2'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$sum=$sum+$q2*$row[2];
}
if(!empty($_POST['m_id3'] ) and !empty($_POST['q_id3']))
{
	$m3=$_POST['m_id3'];
	$q3=$_POST['q_id3'];
	$query="select * from medicine where m_id='m_id3'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$sum=$sum+$q3*$row[2];
}
if(!empty($_POST['m_id4'] ) and !empty($_POST['q_id4']))
{
	$m4=$_POST['m_id4'];
	$q4=$_POST['q_id4'];
	$query="select * from medicine where m_id='m_id4'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$sum=$sum+$q4*$row[2];
}
if(!empty($_POST['m_id5'] ) and !empty($_POST['q_id5']))
{
	$m5=$_POST['m_id5'];
	$q5=$_POST['q_id5'];
	$query="select * from medicine where m_id='m_id5'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$sum=$sum+$q5*$row[2];
}
if(!empty($_POST['m_id6'] ) and !empty($_POST['q_id6']))
{
	$m6=$_POST['m_id6'];
	$q6=$_POST['q_id6'];
	$query="select * from medicine where m_id='m_id6'";
	$run=mysql_query($query);
	$row=mysql_fetch_array($run);
	$sum=$sum+$q6*$row[2];
}	


echo $sum;



?>