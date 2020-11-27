<?php
require "include\common2.php";
session_start();
if(isset($_POST['submit'])){
    $id = $_SESSION['uid'];
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $university = $_POST['University_name'];
    
    $q = "INSERT INTO `university`(`University_name`) VALUES ('$university')";
    $qry = mysqli_query($conn,$q)or die(mysqli_error($conn)); 
    header('location:add_university.php');
}else
{   
    header('location:add_university.php');
}
