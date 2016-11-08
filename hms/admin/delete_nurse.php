<?php 
include('../includes/connection.php');
$delete=$_GET['del'];
$query="delete from nurse where nurse_id='$delete'";
if(mysql_query($query)){
  header("location:nurse search.php");
}
?>
      