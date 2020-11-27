<?php
require "include\common.php";
session_start();
if(isset($_SESSION['name'])){
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $_SESSION['name']=$name1;
    $_SESSION['last_name']=$last_name;
}else
{
    header('location:login.php');
}
$university1 = $_POST['university'];
$university = mysqli_real_escape_string($conn, $university1);
$branch2 = $_POST['branch'];
$_SESSION['branch']=$branch2;
$branch = mysqli_real_escape_string($conn, $branch2);
$subject3= $_POST['subject'];
$subject = mysqli_real_escape_string($conn, $subject3);
$_SESSION['sub']=$subject;
$semister4= $_POST['semister'];
$semister = mysqli_real_escape_string($conn, $semister4);
$_SESSION['sem']=$semister;
$time5= $_POST['time'];
$time = mysqli_real_escape_string($conn, $time5);
$_SESSION['time']=$time;
$mark6= $_POST['marks'];
$mark = mysqli_real_escape_string($conn, $mark6);
$_SESSION['mark']=$mark;
$edate7= $_POST['edate'];
$edate = mysqli_real_escape_string($conn, $edate7);
$_SESSION['date']=$edate;


    
    $b = "SELECT * FROM `branch` WHERE Branch_name='$branch'";
    $b1 = mysqli_query($conn,$b)or die(mysqli_error($conn));
    $b2 = mysqli_fetch_assoc($b1);
    $br_id = $b2['Br_id'];
    
    
    
    $s1="SELECT * FROM `subject` WHERE Subject_name='$subject' && Br_id='$br_id'";
    $s2 = mysqli_query($conn,$s1)or die(mysqli_error($conn));
    $s3 = mysqli_fetch_assoc($s2);
    $sub_id = $s3['Sub_id'];
    

$question_id4="SELECT * FROM question WHERE Sub_id='$sub_id' AND Br_id='$br_id' AND Marks='10' order by rand() limit 20";
$question10=mysqli_query($conn,$question_id4)or die(mysqli_error($conn));
$question_id5="SELECT * FROM question WHERE Sub_id='$sub_id' AND Br_id='$br_id' AND Marks='5' AND Type='Short' order by rand() limit 20";
$question5brief = mysqli_query($conn,$question_id5)or die(mysqli_error($conn));
$question_id6="SELECT * FROM question WHERE Sub_id='$sub_id' AND Br_id='$br_id' AND Marks='5' AND Type='Defination' order by rand() limit 20";
$question5define=mysqli_query($conn,$question_id6)or die(mysqli_error($conn));
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
        <div class="container">
            <form action="cust_check_process.php" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="col-lg-2">Paper</div>
                        <div class="col-lg-2"> Subject Code: 52707 </div>
                        <div class="col-lg-2"><?php echo $subject; ?><?php echo $semister; ?></div>
                        <div class="col-lg-2"><?php echo $branch; ?> </div>
                        <div class="col-lg-2">CREDIT BASE I </div>
                        <div class="col-lg-2"><?php echo $edate; ?> </div>
                       
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 note">
                    <table>
                                    <tr>
                                        <td>Note :</td><td>1. Question 1 is compulsory.</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>2. Attempt any 3 from Q2 to Q6.</td>
                                    </tr>
                                    <tr>
                                        <td>3. Indicate your answer with various sketches whenever necessary.</td>
                                    </tr>
                                </table>
                </div>
                <div class="col-lg-2 note">
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
                
                
            <div class="row  note">
                    <div class="col-lg-1">Q1.</div>
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table border="1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cen">Q.No.</th>
                                        <th class="cen">Quetions</th>
                                        <th class="cen">Select Quetions</th>
                                    </tr>
                                </thead>
                            <?php 
                            for($i=1;$i<=8;$i++)
                                {
                            $row = mysqli_fetch_assoc($question5brief);
                            $a = $row['Question'];
                            $b = $row['Q_id'];
                            ?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $a; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='question[]'>";?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                </table>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div>
                
                
            <div class="row  note">
                    <div class="col-lg-1">Q2.</div>
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table border="1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cen">Q.No.</th>
                                        <th class="cen">Quetions</th>
                                        <th class="cen">Select Quetions</th>
                                    </tr>
                                </thead>
                                
                                <?php 
                            for($i=9;$i<=12;$i++)
                                {
                            $row = mysqli_fetch_assoc($question10);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $a; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='question1[]'>";?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                </table>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div>
                
                
            <div class="row  note">
                    <div class="col-lg-1">Q3.</div>
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table border="1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cen">Q.No.</th>
                                        <th class="cen">Quetions</th>
                                        <th class="cen">Select Quetions</th>
                                    </tr>
                                </thead>
                            <?php 
                            for($i=13;$i<=16;$i++)
                                {
                            $row = mysqli_fetch_assoc($question10);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $a; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='question2[]'>";?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                </table>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div>
                
                
            <div class="row  note">
                    <div class="col-lg-1">Q4.</div>
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table border="1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cen">Q.No.</th>
                                        <th class="cen">Quetions</th>
                                        <th class="cen">Select Quetions</th>
                                    </tr>
                                </thead>
                            <?php 
                            for($i=17;$i<=20;$i++)
                                {
                            $row = mysqli_fetch_assoc($question10);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $a; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='question3[]'>";?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                </table>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div>
                
                
            <div class="row  note">
                    <div class="col-lg-1">Q5.</div>
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table border="1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cen">Q.No.</th>
                                        <th class="cen">Quetions</th>
                                        <th class="cen">Select Quetions</th>
                                    </tr>
                                </thead>
                            <?php 
                            for($i=21;$i<=24;$i++)
                                {
                            $row = mysqli_fetch_assoc($question10);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $a; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='question4[]'>";?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                </table>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div>
                
                
            <div class="row  note">
                    <div class="col-lg-1">Q6.</div>
                    <div class="col-lg-10">
                        <div class="table-responsive">
                            <table border="1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cen">Q.No.</th>
                                        <th class="cen">Quetions</th>
                                        <th class="cen">Select Quetions</th>
                                    </tr>
                                </thead>
                            <?php 
                            for($i=25;$i<=30;$i++)
                                {
                            $row = mysqli_fetch_assoc($question5define);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $a; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='question5[]'>";?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                </table>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div>
                
                
                <div class="row">
                    <div class="col-lg-offset-4 col-lg-1">
                        <input type="submit" value="submit" name="submit" class="btn btn-primary"/>
                    </div>
                </div>
        <div class="footer">
            
        </div>
            </form>
        </div>
    </body>
</html>