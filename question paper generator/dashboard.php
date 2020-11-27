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
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <a href="select_paper.php"><div class="thumb1"></div>
                        <div class="caption cen">
                        <h3>Click here to Create Question Papers</h3>
                    </div></a>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <a href="ut_question.php"><div class="thumb2"></div>
                        <div class="caption cen">
                        <h3>Click here to Create Unit Test Question Papers</h3>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <a href="assignment.php"><div class="thumb3"></div>
                        <div class="caption cen">
                        <h3>Click here to Create Assignments</h3>
                    </div></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
