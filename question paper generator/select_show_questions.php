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
$marks ="SELECT DISTINCT Marks from question";
$marks_result=mysqli_query($conn,$marks)or die(mysqli_error($conn));
$type ="SELECT DISTINCT Type from question";
$type_result=mysqli_query($conn,$type)or die(mysqli_error($conn));
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
                    <form action="direct_paper_process.php" method="POST">
                        
                        <div class="cen" style="background-color: skyblue;"><h1>Select paper</h1>
                                <p style="color:red; font-weight: bold; font-size: 20px;">If you want to get all of your questions then direct click next.</p>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                          <label for="Branch" class="control-label" name="Branch">Select Branch:</label>
                                          <select class="form-control" id="state_id" name="branch">
                                              <option value="not required">not required</option>
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
                                          <label for="Semister" class="control-label" name="subject">Select Subject:</label>
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
                            </div>

                        <div class="col-lg-6">
                            
                            <div class="form-group">
                                          <label for="Semister" class="control-label" name="marks">Select Marks:</label>
                                          <select class="form-control" id="state_id" name="semister">
                                                  
                                                <?php 
                                                        while($mark =mysqli_fetch_array($marks_result))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $mark['Marks']; ?>"><?php echo $mark['Marks']; ?></option>
                                                        <?php 
                                                        } 
                                                    ?>
                                                        
                                          </select>
                            </div>
                            <div class="form-group">
                                          <label for="Semister" class="control-label" name="type">Select Type:</label>
                                          <select class="form-control" id="state_id" name="semister">
                                                  
                                                <?php 
                                                        while($type1 =mysqli_fetch_array($type_result))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $type1['Type']; ?>"><?php echo $type1['Type']; ?></option>
                                                        <?php 
                                                        } 
                                                    ?>
                                                        
                                          </select>
                            </div>
                        </div>
                        <div class="clearfix">
                            <a href="profile.php"><button type="button" class="cancelbtn">Cancel</button></a>
                            <button type="submit" class="signupbtn" name="submit">Next</button>
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>