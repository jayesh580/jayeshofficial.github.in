<?php
require "include\common.php";
session_start();
if(isset($_SESSION['name'])){
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $Username = $_SESSION['Username'];
    $email = $_SESSION['email'];
    $age = $_SESSION['age'];
    $address = $_SESSION['address'];
    $phone = $_SESSION['phone'];
    $photo = $_SESSION['photo'];
    $Profession = $_SESSION['Profession'];
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
    <body>
        <?php include 'include/navbar.php';?>
        <div class="container-fluid">
                <div class="row">
                <div class="col-lg-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading cen">
                            <h3 style="font-size: 30px;">Profile Details</h3>
                            </div>
                            <div class="panel-body">
                                <p style="color:red; font-weight: bold; font-size: 20px;"><strong style="color:blue;">Full Name:</strong> <?php echo $name1.' '.$last_name;?></p>
                                <p style="color:red; font-weight: bold; font-size: 20px;"><strong style="color:blue;">Address:</strong> <?php echo $address;?></p>
                                <p style="color:red; font-weight: bold; font-size: 20px;"><strong style="color:blue;">Email:</strong> <?php echo $email;?></p>
                                <p style="color:red; font-weight: bold; font-size: 20px;"><strong style="color:blue;">Age :</strong> <?php echo $age;?></p>
                                <p style="color:red; font-weight: bold; font-size: 20px;"><strong style="color:blue;">Profession :</strong> <?php echo $Profession;?></p>
                            </div>
                        </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="thumbnail">
                            <img src="<?php echo $photo;?>" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                                <h4><?php echo $Username; ?></h4>
                            </div>
                    </div>
                </div>
                </div>
            
                <div class="row">
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="my_questions.php">
                            <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Show my Questions</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="add_books.php">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>My created semister question papers</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="image/papers3.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>My created UT question papers</h4>
                    </div></a>
                    </div>
                </div>
                    <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>My created assignments</h4>
                    </div></a>
                    </div>
                </div>
                </div>    
            
            
            <div class="row">
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="add_question.php">
                            <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Insert Question</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="select_paper.php">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Create semister question papers</h4>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="ut_question.php">
                            <img src="image/papers3.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Create UT question papers</h4>
                    </div></a>
                    </div>
                </div>
                    <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="assignment.php">
                            <img src="image/papers2.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                        <div class="caption cen">
                        <h4>Create assignments</h4>
                    </div></a>
                    </div>
                </div>
                </div> 
            
            </div>
    </body>
</html>
