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
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="add_question.php">
                            <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Click here to Add Questions</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="add_university.php">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Click here to Add University</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="add_branch.php">
                            <img src="image/papers3.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Click here to Branch</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="Add_collages.php">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Click here to Collages</h4>
                    </div></a>
                    </div>
                </div>
                </div>
            
                <div class="row">
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="add_subject.php">
                            <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Click here to Add Subjects</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="all_questions.php">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>All Questions in database</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="image/papers3.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Click here to Add Common Questions</h4>
                    </div></a>
                    </div>
                </div>
                    <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Click here to Add Notes</h4>
                    </div></a>
                    </div>
                </div>
                </div>            
            </div>
    </body>
</html>