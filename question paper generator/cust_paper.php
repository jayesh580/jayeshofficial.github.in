<?php 
require "include\common.php";
session_start();
if(isset($_SESSION['name'])){
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
}else
{
    header('location:login.php');
}
$university="SELECT * FROM `university`";
$university_result=mysqli_query($conn,$university)or die(mysqli_error($conn));
$branch="SELECT * FROM `branch`";
$branch_result=mysqli_query($conn,$branch)or die(mysqli_error($conn));
$subject="SELECT * FROM `subject`";
$subject_result=mysqli_query($conn,$subject)or die(mysqli_error($conn));
$semister="SELECT DISTINCT Semister from subject";
$semister_result=mysqli_query($conn,$semister)or die(mysqli_error($conn));
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        
    </head>
    <body>
        <?php include 'include/navbar.php';?>
        <div class="container decor_bg" id="content">
                <div class="container col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 jumbotron">
                    <form action="cust_check.php" method="POST">
                        
                        <div class="cen" style="background-color: skyblue;"><h1>Select paper</h1>
                                <p>Please fill in this form to create an Question Paper.</p>
                            </div>

                            <div class="col-lg-6">
                                  <div class="form-group">
                                          <label for="University" class="control-label" name="University">Select University:</label>
                                          <select class="form-control" id="state_id" name="university">
                                                  <?php 
                                                        while($university1=mysqli_fetch_array($university_result))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $university1['University_name']; ?>"><?php echo $university1['University_name']; ?></option>
                                                        <?php 
                                                        } 
                                                    ?>
                                          </select>
                                  </div>
                                <div class="form-group">
                                          <label for="Branch" class="control-label" name="Branch">Select Branch:</label>
                                          <select class="form-control" id="state_id" name="branch">
                                                  <?php 
                                                        while($branch1=mysqli_fetch_array($branch_result))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $branch1['Branch_name']; ?>"><?php echo $branch1['Branch_name']; ?></option>
                                                        <?php 
                                                        } 
                                                    ?>
                                          </select>
                                  </div>
                                <div class="form-group">
                                      <label for="time" class="control-label">Enter the time of examination:</label>
                                      <input class="form-control" type="number" placeholder="Enter time for exam" name="time"  required = "true">
                                      <script>
                                    $(function() {
                                    $('#basicExample').timepicker();
                                                  });
                                        </script>
                                </div>
                            </div>

                        <div class="col-lg-6">
                            
                            <div class="form-group">
                                          <label for="Subject" class="control-label" name="subject">Select Subject:</label>
                                          <select class="form-control" id="state_id" name="subject">
                                                  <?php 
                                                        while($subject1=mysqli_fetch_array($subject_result))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $subject1['Subject_name']; ?>"><?php echo $subject1['Subject_name']; ?></option>
                                                        <?php 
                                                        } 
                                                    ?>
                                          </select>
                                  </div>
                            <div class="form-group">
                                          <label for="Semister" class="control-label" name="Semister">Select Semister:</label>
                                          <select class="form-control" id="state_id" name="semister">
                                                  <?php 
                                                        while($semister1=mysqli_fetch_array($semister_result))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $semister1['Semister']; ?>"><?php echo $semister1['Semister']; ?></option>
                                                        <?php 
                                                        } 
                                                    ?>
                                          </select>
                                  </div>
                            <div class="form-group">
                                      <label for="time" class="control-label">Enter the Marks of examination:</label>
                                      <input class="form-control" placeholder="Enter total marks" name="marks"  required = "true">
                                      
                                </div>
                        </div>
                        <div class="col-lg-offset-2 col-lg-8">
                            <div class="form-group">
                                      <label for="phone_id" class="control-label">Enter the date of examination:</label>
                                      <input type="date" name="edate"/>
                            </div>
                        </div>
                        <div class="clearfix">
                            <a href="select_paper.php"><button type="button" class="cancelbtn">Cancel</button></a>
                            <button type="submit" class="signupbtn" name="submit">Next</button>
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>
