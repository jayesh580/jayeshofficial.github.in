<?php
require "include\common2.php";
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $file = $_FILES['myfile'];
    
   $filename = $file['name'];
   $fileerror = $file['error'];
   $filetmp = $file['tmp_name'];
   print_r($file);
   
   $fileext = explode('.',$filename);
   $filecheck = strtolower(end($fileext));
   $fileextstored = array('png','jpg','jpeg');
   
   if(in_array($filecheck, $fileextstored))
   {
       $destinationfile = 'image/'.$filename;
       move_uploaded_file($filetmp, $destinationfile);
       $q = "INSERT INTO `test`(`Name`, `Image`) VALUES ('$username','$destinationfile')";
       $qry = mysqli_query($conn,$q)or die(mysqli_error($conn));
   }
}

?>
<html>
    <head>
        <title>sign up</title>
      
    </head>
    <body>
                                <form role="form" method="POST" action="test2.php" enctype="multipart/form-data">
                                    
                                    <div class="field-wrap">
                                        <input type="text" required autocomplete="off" value="name" name="username"/>
                                    </div>
                                  
                                    <div>
                                        <input type="file" id="file" name="myfile">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Enter</button><br><br>
                                </form><br/>         
    </body>
</html>




