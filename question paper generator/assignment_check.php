<?php
require "include\common.php";
session_start();
if(isset($_SESSION['name'])){
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $id = $_SESSION['uid'];
}else
{
    header('location:login.php');
}

$branch2 = $_POST['branch'];
$branch = mysqli_real_escape_string($conn, $branch2);
$subject3= $_POST['subject'];
$subject = mysqli_real_escape_string($conn, $subject3);
$semister4= $_POST['semister'];
$semister = mysqli_real_escape_string($conn, $semister4);
$edate7= $_POST['edate'];
$edate = mysqli_real_escape_string($conn, $edate7);
$mark6= $_POST['marks'];
$mark = mysqli_real_escape_string($conn, $mark6);
$ass1= $_POST['ass'];
$ass = mysqli_real_escape_string($conn, $ass1);
$num1 = $_POST['no'];
$num = mysqli_real_escape_string($conn, $num1);

$b = "SELECT * FROM `branch` WHERE Branch_name='$branch'";
$b1 = mysqli_query($conn,$b)or die(mysqli_error($conn));
$b2 = mysqli_fetch_assoc($b1);
$br_id = $b2['Br_id'];      
    
$s1="SELECT * FROM `subject` WHERE Subject_name='$subject' && Br_id='$br_id'";
$s2 = mysqli_query($conn,$s1)or die(mysqli_error($conn));
$s3 = mysqli_fetch_assoc($s2);
$sub_id = $s3['Sub_id'];

$qry = "select Clg_id from user_tb where U_id='$id'";
$run = mysqli_query($conn,$qry)or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($run);
$r = $row['Clg_id'];

$collage="SELECT * FROM `collage` WHERE Clg_id='$r' ";
$clg=mysqli_query($conn,$collage)or die(mysqli_error($conn)); 
$row1 = mysqli_fetch_assoc($clg);
$c = $row1['Collage_name'];

$question="SELECT * FROM question WHERE Sub_id='$sub_id' AND Br_id='$br_id' order by rand() limit $num";
$question5 = mysqli_query($conn,$question)or die(mysqli_error($conn));

$co = mysqli_num_rows($question5);
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
                    <p class=""><?php echo $c; ?></p>
                    <p class=""><?php echo $branch.' '.$semister; ?></p>
                    <p class=""><?php echo 'YEAR 2020-21'; ?></p>
                    <p class=""><?php echo 'Assignment No.'.' '.$ass; ?></p>
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
                                <td>Total Marks: <?php echo $mark; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            
            <div class="row note">
                <?php for($i=1;$i<=$co;$i++){ 
                $row = mysqli_fetch_assoc($question5);
                ?> 
                <div class="row note">
                <div class="col-lg-offset-1 col-lg-1 col-md-1 col-xs-1"><?php echo 'Q.No.'.$i; ?></div>
                <div class="col-lg-10 col-md-10 col-xs-10"><?php echo $row['Question']; ?></div>
                </div> 
                <?php } ?>
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