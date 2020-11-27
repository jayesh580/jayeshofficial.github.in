<?php
require "include\common2.php";
session_start();
if(isset($_POST['submit'])){
    $id = $_SESSION['uid'];
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $subject = $_POST['subject_name'];
    $sem = $_POST['semister'];
    $semister = 'Semister '.$sem;
    
    
    $br = $_POST['branch'];
    $b = "SELECT * FROM `branch` WHERE Branch_name='$br'";
    $b1 = mysqli_query($conn,$b)or die(mysqli_error($conn));
    $b2 = mysqli_fetch_assoc($b1);
    $branch = $b2['Br_id'];
    
    
    $q = "INSERT INTO `subject`(`Subject_name`, `Semister`, `Br_id`) VALUES ('$subject','$semister','$branch')";
    $qry = mysqli_query($conn,$q)or die(mysqli_error($conn));
    
    header('location:add_subject.php');
}else
{   
    header('location:add_subject.php');
}
