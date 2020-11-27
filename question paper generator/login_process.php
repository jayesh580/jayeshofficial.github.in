<?php
require "include\common2.php";
session_start();
if(!isset($_SESSION['username'])){
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qry = "select * from user_tb where Username='$username' && Password='$password'";
    $run = mysqli_query($conn,$qry)or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);
    if($row<1)
    { ?>
        <script>alert('Username or Password not match!!');
            window.open('login.php','_self');
        </script>
   <?php }
   else{
       $data = mysqli_fetch_assoc($run);
       $id=$data['U_id'];
       $name=$data['U_F_name'];
       $Last_name=$data['U_L_name'];
       $profession=$data['Profession'];
       $Username=$data['Username'];
       $email=$data['email'];
       $age=$data['age'];
       $photo=$data['photo'];
       $address=$data['address'];
       $phone=$data['contact_info'];
       $_SESSION['uid']=$id;
       $_SESSION['name']=$name;
       $_SESSION['last_name']=$Last_name;
       $_SESSION['Profession']=$profession;
       $_SESSION['Username']=$Username;
       $_SESSION['email']=$email;
       $_SESSION['age']=$age;
       $_SESSION['address']=$address;
       $_SESSION['phone']=$phone;
       $_SESSION['photo']=$photo;
       
       if($profession=='admin'){
           header('location:admin_dashboard.php');
       }else{
          header('location:dashboard.php'); 
       }
   }
}
else{
    header('location:dashboard.php');
}
}
?>
