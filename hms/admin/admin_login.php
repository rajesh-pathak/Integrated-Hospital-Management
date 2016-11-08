<?php
  session_start();
  include('../includes/connection.php');
  if(isset($_POST['submit']))
  {
    $email2=$_POST['email'];
    $pwd2=$_POST['password'];
    $logtype=$_POST['sel1'];
  
     if($_POST['sel1']=="admin"){
      $check="select * from  admin_info where admin_id='$email2' AND password='$pwd2'";
        $run=mysql_query($check);
        
        if(mysql_num_rows($run)>0){
          $_SESSION['email']=$email2;
          
          echo "<script>alert('Welcome!')</script>";
           echo "<script>window.open('admin.php','_self')</script>";

        }
        else
        {
          echo "<script>alert('email or password is incorrect')</script>";
          echo"<script>window.open('../index.php','_self')</script>";
        }
      }
      elseif($_POST['sel1']=="doc")
      {
        $check="select * from  doctor where doc_id='$email2' AND doc_password='$pwd2'";
        $run=mysql_query($check);
        
        if(mysql_num_rows($run)>0){
          $_SESSION['email']=$email2;
          
          echo "<script>alert('Welcome!')</script>";
           echo "<script>window.open('../doctor/pat_det.php','_self')</script>";

        }
        else
        {
          echo "<script>alert('email or password is incorrect')</script>";
          echo"<script>window.open('../index.php','_self')</script>";
        }
      }
       elseif($_POST['sel1']=="cashier")
      {
        $check="select * from  cashier where c_id='$email2' AND c_password='$pwd2'";
        $run=mysql_query($check);
    
        
        if(mysql_num_rows($run)>0){
          $_SESSION['email']=$email2;
          
          echo "<script>alert('Welcome!')</script>";
           echo "<script>window.open('../cashier/bill.php','_self')</script>";

        }
    
        else
        {
          echo "<script>alert('email or password is incorrect')</script>";
          echo"<script>window.open('../index.php','_self')</script>";
        }
      }
      elseif($_POST['sel1']=="nurse")
      {
        $check="select * from  nurse where nurse_id='$email2' AND nurse_paswd='$pwd2'";
        $run=mysql_query($check);
    
        
        if(mysql_num_rows($run)>0){
          $_SESSION['email']=$email2;
          
          echo "<script>alert('Welcome!')</script>";
           echo "<script>window.open('../nurse/pat_details.php','_self')</script>";

        }
    
        else
        {
          echo "<script>alert('email or password is incorrect')</script>";
          echo"<script>window.open('../index.php','_self')</script>";
        }
      }
  }
?>
