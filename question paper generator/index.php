<?php
require "include\common.php";
session_start();
if(isset($_SESSION['uid']))
{
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body class="back1">
        <?php include "include/navbar.php";?>
        <div class="jumbotron back"> 
            <div class="container text-center text-primary">
               <h1>Question Hub</h1>   
    <p>Best Way to Generate Question Papers </p>
  </div>
</div>
<div class="container-fluid bg-3 text-center back1">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Create Papers</p>
      <img src="image/papers1.jpg" class="img-responsive" style="width:100%; height: 200px;" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>About</p>
      <img src="image/papers2.jpg" class="img-responsive" style="width:100%; height: 200px;" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Gallery</p>
      <img src="image/papers3.jpg" class="img-responsive" style="width:100%; height: 200px;" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Contact us</p>
      <img src="image/papers4.jpg" class="img-responsive" style="width:100%; height: 200px;" alt="Image">
    </div>
  </div>
</div><br>
<?php include "include/footer.php";?>
    </body>
</html>
