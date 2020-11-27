<?php 
require "include\common2.php";
session_start();
if(isset($_SESSION['name'])){
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name']; 
}else
{
    header('location:login.php');
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User page</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        
    </head>
    <body>
        <?php include 'include/navbar.php';?>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="col-lg-3 navbar-brand">
                    <?php echo 'welcome'.' : '.$name1.' '.$last_name; ?>
                </div>
                </nav>
            </div>
            <div class="row container col-lg-4 col-lg-offset-4 jumbotron">
                <div class="row cen note">
                    <a href="generate.php">Create paper</a>
                </div>
            </div>
        </div>
    </body>
</html>
