<?php
require "include\common2.php";
session_start();
if(isset($_POST['submit'])){
    $id = $_SESSION['uid'];
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $collage = $_POST['collage_name'];
   
    $uni = $_POST['university'];
    $u = "SELECT `uni_id` FROM `university` WHERE University_name = '$uni'";
    $u1 = mysqli_query($conn,$u)or die(mysqli_error($conn));
    $u2 = mysqli_fetch_assoc($u1);
    $university = $u2['uni_id'];
    
    $q = "INSERT INTO `collage`(`Collage_name`,`uni_id`) VALUES ('$collage','$university')";
    $qry = mysqli_query($conn,$q)or die(mysqli_error($conn));
    
   header('location:add_collages.php');
}else
{   
    header('location:add_collages.php');
}
