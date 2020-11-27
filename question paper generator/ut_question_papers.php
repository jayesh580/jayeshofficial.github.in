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
$c = $_POST['collage'];
$c1 = mysqli_real_escape_string($conn, $c);
$branch2 = $_POST['branch'];
$branch = mysqli_real_escape_string($conn, $branch2);
$subject3= $_POST['subject'];
$subject = mysqli_real_escape_string($conn, $subject3);
$semister4= $_POST['semister'];
$semister = mysqli_real_escape_string($conn, $semister4);
$time5= $_POST['time'];
$time = mysqli_real_escape_string($conn, $time5);
$mark6= $_POST['marks'];
$mark = mysqli_real_escape_string($conn, $mark6);
$edate7= $_POST['edate'];
$edate = mysqli_real_escape_string($conn, $edate7);


    $b = "SELECT * FROM `branch` WHERE Branch_name='$branch'";
    $b1 = mysqli_query($conn,$b)or die(mysqli_error($conn));
    $b2 = mysqli_fetch_assoc($b1);
    $br_id = $b2['Br_id'];
    
    
    
    $s1="SELECT * FROM `subject` WHERE Subject_name='$subject' && Br_id='$br_id'";
    $s2 = mysqli_query($conn,$s1)or die(mysqli_error($conn));
    $s3 = mysqli_fetch_assoc($s2);
    $sub_id = $s3['Sub_id'];
    

//$collage="SELECT * FROM `collage` WHERE Collage_name='$c' ";
//$clg=mysqli_query($conn,$collage)or die(mysqli_error($conn));    
$question_id5="SELECT * FROM question WHERE Sub_id='$sub_id' AND Br_id='$br_id' AND Marks='5' AND Type='Short' order by rand() limit 20";
$question5brief = mysqli_query($conn,$question_id5)or die(mysqli_error($conn));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paper Format</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'include/navbar.php';?>
        <div class="container" id="div1">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 details">
                    <p class=""><?php echo $c1; ?></p>
                    <p class=""><?php echo $branch.' '.$semister; ?></p>
                    <p class=""><?php echo 'YEAR 2020-21'; ?></p>
                    <p class=""><?php echo 'Internal Assessment'; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xs-9 note">
                    <table>
                                    <tr>
                                        <td>Subject: <?php echo $subject; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date: <?php echo $edate; ?></td>
                                    </tr>
                    </table>
                </div>
                <div class="col-lg-2 col-md-3 col-xs-3 note">
                    <table>
                        <tbody>
                            <tr>
                                <td>Max.Marks: <?php echo $mark; ?></td>
                            </tr>
                            <tr>
                                <td>Time: <?php echo $time; ?> hours</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row note">
                <div class="col-lg-1 col-md-1 col-xs-1">Q1.</div>
                <div class="col-lg-10 col-md-10 col-xs-10">
                    <div class="row note1">Attempt any Four.</div>
                    <div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=5)
                        {
                        $row = mysqli_fetch_assoc($question5brief);
                        
                        ?>
                            <li><?php echo $row['Question']; ?></li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                        
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-lg-offset-5 col-md-offset-5 col-xs-offset-5 col-lg-2 col-md-2 col-xs-2">
                        <input type="submit" value="Print" class="btn btn-primary" onclick="printContent('div1')">
                    </div>
            </div>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
    </body>
</html>