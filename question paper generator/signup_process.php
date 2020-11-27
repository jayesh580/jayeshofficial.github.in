<?php
require "include\common.php";
if(isset($_POST['submit'])){ 
$F_name = $_POST['First_name'];
$L_name = $_POST['Last_name'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['password'];
$Confirme_password = $_POST['password1'];
$Profession = $_POST['profession'];
$age = $_POST['age'];
$address = $_POST['add'];
$Phone_no = $_POST['phone'];
$Clg_name = $_POST['clg'];
$file = $_FILES['myfile'];

    $qry = "select * from user_tb where Username='$username';";
    $run = mysqli_query($conn,$qry)or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);

    $pwd = $password==$Confirme_password;

    $qry1 = "select * from user_tb where email = '$email';";
    $run1 = mysqli_query($conn,$qry1)or die(mysqli_error($conn));
    $row1 = mysqli_num_rows($run1);
    
    $qry2 = "select * from user_tb where contact_info = '$Phone_no';";
    $run2 = mysqli_query($conn,$qry2)or die(mysqli_error($conn));
    $row2 = mysqli_num_rows($run2);
    
    
    
    if($row!=0)
    { ?>
        <script>alert('Username already exist please enter another username!!');
            window.open('signup.php','_self');
        </script>
   <?php }
   
   if($pwd!=1)
    { ?>
        <script>alert('Password are not match try again!!');
            window.open('signup.php','_self');
        </script>
   <?php }
   
   if($row1!=0)
    { ?>
        <script>alert('Email already exist please enter another email!!');
            window.open('signup.php','_self');
        </script>
   <?php }
   
   if($row2!=0)
    { ?>
        <script>alert('Phone number already exist please enter another Phone number!!');
            window.open('signup.php','_self');
        </script>
   <?php }
                      
   $filename = $file['name'];
   $fileerror = $file['error'];
   $filetmp = $file['tmp_name'];
   $fileext = explode('.',$filename);
   $filecheck = strtolower(end($fileext));
   $fileextstored = array('png','jpg','jpeg');
   
   if(in_array($filecheck, $fileextstored))
   {
   $destinationfile = 'image/'.$filename;
   move_uploaded_file($filetmp, $destinationfile);
   }else{?>
       <script>alert('Please insert correct image!!');
            window.open('signup.php','_self');
        </script><?php
   }
  
   $q = "INSERT INTO `user_tb`(`U_F_name`, `U_L_name`, `Profession`, `Username`, `Password`, `email`, `age`, `address`, `contact_info`, `photo`, `Clg_id`) VALUES ('$F_name','$L_name','$Profession','$username','$password','$email','$age','$address','$Phone_no','$destinationfile','$Clg_name')";
   $qry = mysqli_query($conn,$q)or die(mysqli_error($conn));?>
   
        <script>alert('Youre Profile are generated successfully, please login the page!!');
            window.open('login.php','_self');
        </script><?php
}else{
       header('location:signup.php');
   }
?>