<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Appointment</title>
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
<?php include("doc_nav.php"); ?>
<?php $id=$_GET['p_id']; ?>
<body style="background-color:#C1E1A6">
  <div class=container>
    <div class=row>
    <form method="POST" action="pat_appt1.php?pid=<?php echo $id;?>">
      <div class="form-group">
         <label for="appt">Select Date</label>
         <input type="date" class="form-control" name="appt">
      </div>
      <input type="submit" value="Submit" name="submit" class="btn btn-success btn-block btn-responsive" role=button/><br>
    </form>
    </div>
    </div>
    </body>
    </html>