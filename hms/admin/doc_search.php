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
  	th {
    background-color: #4CAF50;
	}
	tr:nth-child(even) {background:#E9E581}
	tr:nth-child(odd) {background: #FFF}
  </style>
</head>

<?php include("admin_nav.php"); ?>
<body style="background-color:#C1E1A6">
  <div class=row>
      <div class="col-lg-4 col-md-4 col-sm-4">
      <br>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <br><br><br>
        <form method="POST" action="doc_search1.php">
          <div class="form-group">
            <label for="d_id">Doctor's ID:</label>
            <input type="text" class="form-control" name="d_id">
          </div>
         <input type="submit" value="search" name="submit" class="btn btn-success btn-block btn-responsive" role=button/><br>
        </form>
      </div>
  </div>
</body>

