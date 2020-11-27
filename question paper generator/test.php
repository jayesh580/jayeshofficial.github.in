<?php
require "include\common2.php";
session_start();
if(isset($_SESSION['name'])){
    $U_id = $_SESSION['uid'];
}else
{
    header('location:login.php');
}
$all = "SELECT q.Q_id,q.Question,q.Marks,q.Type,s.Subject_name,s.Semister,b.Branch_name FROM question q INNER JOIN subject s ON q.Sub_id = s.Sub_id INNER JOIN branch b ON q.Br_id = b.Br_id INNER JOIN user_tb u ON q.U_id = u.U_id";
$all1=mysqli_query($conn,$all)or die(mysqli_error($conn));
$c= mysqli_num_rows($all1);
?>
        