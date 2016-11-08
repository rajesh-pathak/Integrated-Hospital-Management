<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nurse </title>
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
<?php include("admin_nav.php"); ?>
<body style="background-color:#C1E1A6">
  <div class=container>
    <div class=row>
      <div class="col-lg-3 col-md-3 col-sm-3">
      <br>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <br><br><br>
        <a href="nurse search.php" class="btn btn-success btn-block btn-responsive" role=button>Search Nurse</a><br>
        <a href="nurse_reg.php" class="btn btn-primary btn-block btn-responsive" role=button>Add Nurse</a><br>
      </div>
    </div>
  </div>
</body>