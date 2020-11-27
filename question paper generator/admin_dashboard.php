<?php include 'admin_call.php';?>
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
        <style>
            .h{
                height: 570px;
            }
        </style>
</head>
<body class="back1">
        <?php include 'include/navbar.php';?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-4" style="padding-top: 15px;">
                <?php 
                if(isset($_POST['bt1'])){
                echo $question;
                }
                if(isset($_POST['bt2'])){
                echo $subject1;
                }
                if(isset($_POST['bt3'])){
                echo $branch;
                }
                if(isset($_POST['bt4'])){
                echo $university;
                }
                if(isset($_POST['bt5'])){
                echo $collage;
                }
                ?>
            </div>
            <form method="post" action="admin_dashboard.php">
            <div class="col-lg-7">
                <div class="row" style="padding-left:50px; padding-bottom: 10px; margin-top: 10px;">
                    <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                                <button class="btn btn-block btn-primary" name="bt1">Add Questions</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                            <button class="btn btn-block btn-primary" name="bt2">Add Subject</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                            <button class="btn btn-block btn-primary" name="bt3">Add Branch</button>
                        </div>
                        </div>
                    </div>                    
                </div>
                
                <div class="row" style="padding-left:50px; padding-bottom: 10px; margin-top: 10px;">
                    <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                            <button class="btn btn-block btn-primary" name="bt4">Add University</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                            <button class="btn btn-block btn-primary" name="bt5">Add collage</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                            <button class="btn btn-block btn-primary" name="bt6">Add Books</button>
                        </div>
                        </div>
                    </div>                 
                </div>
            </div>
            </form>
            </div>
            <form method="post" action="admin_dashboard.php">
            <div class="row">
                    <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                                <button class="btn btn-block btn-primary" name="bt1">Add Notes</button>
                        </div>
                        </div>
                    </div>  
                <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                                <button class="btn btn-block btn-primary" name="bt1">Add common Questions</button>
                        </div>
                        </div>
                    </div>  
                <div class="col-lg-4">
                        <div class="thumbnail">
                                <img src="image/papers1.jpg" alt="Responsive image" style="width: 300px; height: 200px;">
                            <div class="caption cen">
                                <button class="btn btn-block btn-primary" name="bt1">Submit</button>
                        </div>
                        </div>
                    </div>  
            </div>
            </form>
        </div>
</body>
</html>




