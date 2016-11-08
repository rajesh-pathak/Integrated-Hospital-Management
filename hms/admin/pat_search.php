<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Search</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style>
  	th {
    background-color: #AF4CAB;
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
        <form method="POST" action="pat_search1.php" >
          <div class="form-group">
            <label for="p_id">Patient's ID:</label>
            <input type="text" class="form-control" name="pt_id">
          </div>
          <input type="submit" value="Search" name="submit" class="btn btn-block btn-success active" role="button"/>
        </form>
      </div>
  </div>
</body>