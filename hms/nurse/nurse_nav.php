<nav class="navbar navbar-inverse ">

  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="pat_det.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a>Welcome Nurse</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php include ('../includes/connection.php');
              $email=$_SESSION['email'];
              $query="select nurse_name from nurse where nurse_id='$email'";
              $run= mysql_query($query);
              while($rows=mysql_fetch_array($run)){
               echo $rows['nurse_name'];
              }


              ?> </a></li>
        <li>
          <a href="logout.php">Log-out</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
