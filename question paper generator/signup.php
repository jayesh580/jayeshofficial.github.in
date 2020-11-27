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
        <title>sign up</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body class="back1">
        <?php include 'include/navbar.php';?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form action="signup_process.php" method="POST" enctype="multipart/form-data">
                            <div class="cen" style="background-color: skyblue;"><h1>Sign Up</h1>
                                <p>Please fill in this form to create an account.</p>
                            </div>

                            <div class="col-lg-6">

                                  <div class="form-group">
                                          <label for="First name_id" class="control-label">First name</label>
                                          <input type="text" class="form-control" id="full_name_id" name="First_name" placeholder="First name" required>
                                  </div>	

                                  <div class="form-group">
                                          <label for="Username_id" class="control-label">Username</label>
                                          <input type="text" class="form-control" id="street1_id" name="Username" placeholder="Enter Username" required>
                                  </div>					

                                  <div class="form-group"> 
                                          <label for="Password_id" class="control-label">Password</label>
                                          <input type="password" class="form-control" id="Password_id" name="password" placeholder="Enter Password" required>
                                  </div>	

                                  <div class="form-group">
                                          <label for="Professtion_id" class="control-label" name="profession">Professtion</label>
                                          <select class="form-control" id="state_id" name="profession">
                                                  <option value="General">General</option>
                                                  <option value="Sutdent">Sutdent</option>
                                                  <option value="Professor">Professor</option>
                                          </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="age_id" class="control-label">Age</label>
                                      <input type="number" class="form-control" id="age_id" name="age" placeholder="Enter your age">
                                  </div>

                                  <div class="form-group">
                                      <label for="phone_id" class="control-label">Contact Number</label>
                                      <input type="number" class="form-control" id="phone_id" name="phone" placeholder="Enter your phone number">
                                  </div>
                          </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Last_name_id" class="control-label">Last Name</label>
                                <input type="text" class="form-control" id="full_name_id" name="Last_name" placeholder="Enter Last Name" required>
                            </div>

                            <div class="form-group">
                                <label for="add_id" class="control-label">Address</label>
                                <input type="text" class="form-control" id="add_id" name="add" placeholder="Enter your address" required>
                            </div>					

                            <div class="form-group"> 
                                <label for="password1_id" class="control-label">Repeat Password</label>
                                <input type="password" class="form-control" id="Password1_id" name="password1" placeholder="Enter Password again" required>
                            </div>	

                            <div class="form-group">
                                <label for="Email_id" class="control-label">Email</label>
                                <input type="email" class="form-control" id="Email_id" name="Email" placeholder="Enter your Email" required>
                            </div>

                            <div class="form-group">
                                <?php 
                                $collage="SELECT * FROM `collage` ";
                                $clg=mysqli_query($conn,$collage)or die(mysqli_error($conn)); 
                                ?>
                                <label for="state_id" class="control-label">Select your collage</label>
                                <select class="form-control" id="state_id" name="clg">
                                    <?php while($row1 = mysqli_fetch_assoc($clg)){?> 
                                    <option value="<?php echo $row1['Clg_id']; ?>"><?php echo $row1['Collage_name']; ?></option> 
                                    <?php }?>
                                </select>					
                            </div>
                            
                            <div class="form-group">
                                <label for="photo_id" class="control-label">Attached Photo</label>
                                <input type="file" class="form-control" id="file" name="myfile">
                            </div>

                        </div>


                        <div class="clearfix">
                            <button type="button" class="cancelbtn">Cancel</button>
                            <button type="submit" class="signupbtn" name="submit">Sign Up</button>
                        </div>
                    </form>	
            </div>
        </div>
    </div>
</body>
</html>