<?php 
include('../includes/connection.php');
$delete=$_GET['del'];
$query="delete from doctor where doc_id='$delete'";
if(mysql_query($query)){
  header("location:doc_search.php");
}
?>
      