<?php 
require "include\common.php";
session_start();
if(isset($_SESSION['uid'])){
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
        <title>Home page</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body class="back1">
        <?php include 'include/navbar.php';?>
        <div class="container-fluid">
            
            <div class="container-fluid" style="margin-top: 70px">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-4">
                    <div class="thumbnail">
                        <a href="direct_paper.php"><div class="thumb4"></div>
                        <div class="caption cen">
                        <h3>Click here to Create Direct Question Papers</h3>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <a href="cust_paper.php"><div class="thumb5"></div>
                        <div class="caption cen">
                        <h3>Click here to Create Customized Question Paper</h3>
                    </div></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>