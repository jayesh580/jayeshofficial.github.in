<?php
require "include\common2.php";
session_start();
if(isset($_POST['submit'])){
    $id = $_SESSION['uid'];
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    
    $question = $_POST['question'];
    $mod = $_POST['module']; 
    $module = 'Module '.$mod;
    $marks = $_POST['marks']; 
    $type = $_POST['type'];
    
    $b3 = $_POST['branch'];
    $b = "SELECT * FROM `branch` WHERE Branch_name='$b3'";
    $b1 = mysqli_query($conn,$b)or die(mysqli_error($conn));
    $b2 = mysqli_fetch_assoc($b1);
    $branch = $b2['Br_id'];
    
      
    $s = $_POST['subject'];
    $s1="SELECT * FROM `subject` WHERE Subject_name='$s' && Br_id='$branch'";
    $s2 = mysqli_query($conn,$s1)or die(mysqli_error($conn));
    $s3 = mysqli_fetch_assoc($s2);
    $subject = $s3['Sub_id'];
    $bo = $_POST['book'];
    $bo1="SELECT * FROM `book` WHERE B_Author_name='$bo' && Sub_id='$subject'";
    $bo2 = mysqli_query($conn,$s1)or die(mysqli_error($conn));
    $bo3 = mysqli_fetch_assoc($s2);
    $book = $bo['B_id'];
   
    $q = "INSERT INTO `question`(`Question`, `Module`, `Marks`, `Type`, `U_id`, `Sub_id`, `Br_id`)"
         . "VALUES ('$question','$module','$marks','$type','$id','$subject','$branch')";
    
    if(mysqli_query($conn,$q)or die(mysqli_error($conn))){
                echo 'insert successfull';
            }else{?>
                <script>alert('Data not inserted!!');
                window.open('add_question.php','_self');
                </script>
           <?php }
           header('location:add_question.php');
          
}
else
{   
    header('location:add_question.php');
}
?> 