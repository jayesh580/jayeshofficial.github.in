<?php
require "include\common2.php";
session_start();
if(isset($_POST['submit'])){
    $id = $_SESSION['uid'];
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $branch = $_POST['Branch_name'];
    
    $q = "INSERT INTO `branch`(`Branch_name`) VALUES ('$branch')";
    $qry = mysqli_query($conn,$q)or die(mysqli_error($conn));
    echo 'data insert successfully';
    header('location:add_branch.php');
   
}else
{   
    header('location:add_branch.php');
}
