<?php 
require "include\common2.php";
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
        <div class="container decor_bg" id="content">
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="col-lg-3 navbar-brand">
                    <?php echo 'welcome'.' : '.$name1.' '.$last_name; ?>
                </div>
                <div class="col-lg-offset-8 col-lg-1">
                    <a href="logout.php" class=""><u>Logout</u></a>
                </div>
            </nav>
            
                <div class="container col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 jumbotron">
                    <form action="process.php" method="POST">
                        <table border="0">
                            <tbody>
                                <tr class="note">
                                    <td class="note"><label for="University">Select University:</label></td>
                                    <td class="cen"><select name="university">
                                    <?php 
                                    while($university1=mysqli_fetch_array($university_result))
                                    {
                                    ?>
                                    <option value="<?php echo $university1['University_name']; ?>"><?php echo $university1['University_name']; ?></option>
                                    <?php 
                                    } 
                                    ?>
                                </select></td>
                                </tr>
                                <tr>
                                    <td class="note"><label for="Branch">Select Branch:</label></td>
                                    <td class="cen"><select name="branch">
                                    <?php 
                                    while($branch1=mysqli_fetch_array($branch_result))
                                    {
                                    ?>
                                    <option value="<?php echo $branch1['Branch_name']; ?>"><?php echo $branch1['Branch_name']; ?></option>
                                    <?php 
                                    } 
                                    ?>
                                </select></td>
                                </tr>
                                <tr>
                                    <td class="note"><label for="Subject">Select Subject:</label></td>
                                    <td class="cen"><select name="subject">
                                    <?php 
                                    while($subject1=mysqli_fetch_array($subject_result))
                                    {
                                    ?>
                                    <option value="<?php echo $subject1['Subject_name']; ?>"><?php echo $subject1['Subject_name']; ?></option>
                                    <?php 
                                    } 
                                    ?>
                                </select></td>
                                </tr>
                                <tr>
                                    <td class="note"><label for="Semister">Semister:</label></td>
                                    <td class="cen"><select name="semister">
                                    <?php 
                                    while($semister1=mysqli_fetch_array($semister_result))
                                    {
                                    ?>
                                    <option value="<?php echo $semister1['Semister']; ?>"><?php echo $semister1['Semister']; ?></option>
                                    <?php 
                                    } 
                                    ?>
                                </select></td>
                                </tr>
                                <tr>
                                    <td class="note"><label for="time">Enter the time of examination:</label></td>
                                    <td class="cen"><input class="form-control" placeholder="Enter time for exam" name="time"  required = "true">
                                <script>
                                    $(function() {
                                    $('#basicExample').timepicker();
                                                  });
                                </script></td>
                                </tr>
                                <tr>
                                    <td class="note"><label for="mark">Enter the Marks of examination:</label></td>
                                    <td class="cen"><input class="form-control" placeholder="Enter total marks" name="marks"  required = "true"></td>
                                </tr>
                                <tr>
                                    <td  class="note"><label for="date">Enter the date of examination:</label></td>
                                    <td class="cen"><input type="date" name="edate"/></td>
                                </tr>
                                <tr>
                                    <td class="note" colspan="2" align="center"><button type="submit" name="submit" class="btn btn-primary">Submit</button></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
        </div>
    </body>
</html>
