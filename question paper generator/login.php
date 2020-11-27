<?php
require "include\common2.php";
session_start();
if(isset($_SESSION['uid']))
{
    header('location:dashboard.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paper Format</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
    </head>
    <body class="back1">
       <?php include 'include/navbar.php';?>
        <div id="content" class="row"> 
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form role="form" method="POST" action="login_process.php">
                                    <div class="form-group">
                                        <input type="name" class="form-control"  placeholder="Username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.html">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>