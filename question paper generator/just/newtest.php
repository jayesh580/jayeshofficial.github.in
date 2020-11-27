<?php
require "include\common2.php";
$university1 = $_POST['university'];
$university = mysqli_real_escape_string($conn, $university1);
$branch2 = $_POST['branch'];
$branch = mysqli_real_escape_string($conn, $branch2);
$subject3= $_POST['subject'];
$subject = mysqli_real_escape_string($conn, $subject3);
$semister4= $_POST['semister'];
$semister = mysqli_real_escape_string($conn, $semister4);
$time5= $_POST['time'];
$time = mysqli_real_escape_string($conn, $time5);
$mark6= $_POST['mark'];
$mark = mysqli_real_escape_string($conn, $mark6);
$edate7= $_POST['edate'];
$edate = mysqli_real_escape_string($conn, $edate7);

$branch_id2="SELECT * FROM branch WHERE Branch_name='$branch'";
$branch_id=mysqli_query($conn,$branch_id2)or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($subject_result);
$row1 = $row['Br_id'];
$subject_id3="SELECT * FROM subject WHERE Subject_name='$subject' AND Semister='$semister' AND Br_id='$row1'";
$subject_id=mysqli_query($conn,$subject_id3)or die(mysqli_error($conn));
$row2 = mysqli_fetch_assoc($subject_id);
$row3 = $row['Sub_id'];

$question_id4="SELECT * FROM question WHERE Sub_id='$row3' AND Br_id='$row1' AND Marks='10' order by rand() limit 20";
$question10=mysqli_query($conn,$question_id4)or die(mysqli_error($conn));
$question_id5="SELECT * FROM question WHERE Sub_id='$row3' AND Br_id='$row1' AND Marks='5' AND Type='brief' order by rand() limit 20";
$question5brief=mysqli_query($conn,$question_id4)or die(mysqli_error($conn));
$question_id6="SELECT * FROM question WHERE Sub_id='$row3' AND Br_id='$row1' AND Marks='5' AND Type='define' order by rand() limit 20";
$question5define=mysqli_query($conn,$question_id4)or die(mysqli_error($conn));
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
        <div class="container">
            
            <form action="index.php" method="post">
                
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 details">
                    <p  class="">Paper / Subject Code: 52707 / <?php echo $subject; ?>                                                        
               <?php echo $semister; ?>/ <?php echo $branch; ?> / CREDIT BASE I /  <?php echo $edate; ?> </p>
                </div>
            </div>
            <div class="row ">
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
                            $i = 1;
                            while ($i<=8)
                        {
                        $row = mysqli_fetch_assoc($question5brief);
                        $a = $row['Question'];?>
                            
                                
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                    
                                        <td><?php echo $row['Question']; ?></td>
                                    
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='$i'>";
                                ?></td>
                                    </tr>
                                </tbody>
                            
                        <?php 
                        $i++;
                        } ?>
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
                    $i = 1;
                    while ($i<=4)
                        {
                        $row = mysqli_fetch_assoc($question10);
                        $a = $row['Question'];?>
                            
                                
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                    
                                        <td><?php echo $row['Question']; ?></td>
                                    
                                        <td class="cen"><?php echo "<input type='checkbox' value=' $a' name='$i'>";
                                ?></td>
                                    </tr>
                                </tbody>
                            
                        <?php 
                        $i++;
                        } ?>
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
                    $i = 1;
                    while ($i<=4)
                        {
                        $row = mysqli_fetch_assoc($question10);
                        $a = $row['Question'];
                        ?>
                            
                                
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                    
                                        <td><?php echo $row['Question']; ?></td>
                                    
                                        <td class="cen"><?php echo "<input type='checkbox' value=' $a' name='$i'>";
                                ?></td>
                                    </tr>
                                </tbody>
                            
                        <?php 
                        $i++;
                        } ?>
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
                    $i = 1;
                    while ($i<=4)
                        {
                        $row = mysqli_fetch_assoc($question10);
                        $a = $row['Question'];?>
                            
                                
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                    
                                        <td><?php echo $row['Question']; ?></td>
                                    
                                        <td class="cen"><?php echo "<input type='checkbox' value=' $a' name='$i'>";
                                ?></td>
                                    </tr>
                                </tbody>
                            
                        <?php 
                        $i++;
                        } ?>
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
                    $i = 1;
                    while ($i<=5)
                        {
                        $row = mysqli_fetch_assoc($question10);
                        $a = $row['Question'];?>
                            
                                
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                    
                                        <td><?php echo $row['Question']; ?></td>
                                    
                                        <td class="cen"><?php echo "<input type='checkbox' value=' $a' name='$i'>";
                                ?></td>
                                    </tr>
                                </tbody>
                            
                        <?php 
                        $i++;
                        } ?>
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
                    $i = 1;
                    while ($i<=6)
                        {
                        $row = mysqli_fetch_assoc($question5define);
                        $a = $row['Question'];?>
                            
                                
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                    
                                        <td><?php echo $row['Question']; ?></td>
                                    
                                        <td class="cen"><?php echo "<input type='checkbox' value=' $a' name='$i'>";
                                ?></td>
                                    </tr>
                                </tbody>
                            
                        <?php 
                        $i++;
                        } ?>
                                </table>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div>
                
                
                <div class="row">
                    <div class="col-lg-offset-4 col-lg-1">
                        <input type="submit" value="submit" class="btn btn-primary"/>
                    </div>
                </div>
            </form>
        </div>
        <div class="footer">
            
        </div>
    </body>
</html>
