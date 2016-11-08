<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor Search</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style>
  tr:nth-child(even){background: #FFF}
  tr:nth-child(odd) {background: #FFF}
	tr:nth-child(even) {background: #FFF}
	tr:nth-child(odd) {background: #FFF}
  </style>
</head>

<?php include("admin_nav.php"); ?>


<?php
include('../includes/connection.php');
if(isset($_POST['submit']))
{
  $id=$_POST['d_id'];
  $query="select * from doctor where $id=doc_id";
  $run=mysql_query($query);
  
  while($row=mysql_fetch_array($run))
  {
    $id= $row[0];
    $name=$row[1];
    $age= $row[2];
    $contact=$row[3];
    $gender= $row[5];
    $dept=$row[6];

?>
  

<body style="background-color:#C1E1A6">
  <div class="container">
   <table class="table table-bordered">
       <tr>
        <th>ID</th>
        <td><?php echo $id ?></td>
      </tr>
      <tr>
        <th>Name</th>
        <td><?php echo $name ;?></td>
      </tr>
       <tr>
        <th>Age</th>
        <td><?php echo $age;?> </td>
      </tr>
       <tr>
        <th>Contact</th>
        <td><?php echo $contact;?> </td>
      </tr>
       <tr>
        <th>Gender</th>
        <td><?php echo  $gender;?> </td>
      </tr>
       <tr>
        <th>Department</th>
        <td><?php echo $dept;?>  </td>
      </tr>
  <?php } }?>
  </table>
  <div class="col-lg-4 col-md-4 col-sm-4">
      <br>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <br><br><br>
     <a href="delete.php?del=<?php echo $id;?>" class="btn btn-danger btn-block btn-responsive" role=button>Delete</a><br>
  </div>
</body>

