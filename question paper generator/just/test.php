<?php 
require "include\common.php";
$query="SELECT * FROM `question` WHERE Subject='HMI' AND Mark = 10 order by rand() limit 20";
$select_result=mysqli_query($con,$query)or die(mysqli_error($con));
$query5mark="SELECT * FROM `question` WHERE Subject='HMI' AND Mark = 5 order by rand() limit 15";
$select_result1=mysqli_query($con,$query5mark)or die(mysqli_error($con));
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
                    <p  class="">Paper / Subject Code: 52707 / Human Machine Interaction                                                        
               B.E. SEM VII/ COMP / CREDIT BASE I   MAY2019 / 20.05.2019 </p>
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
                                <td>Max.Marks:80</td>
                            </tr>
                            <tr>
                                <td>Time: 3 hours</td>
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
                            for($i=1;$i<=8;$i++)
                                {
                            $row = mysqli_fetch_assoc($select_result1);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $row['Question']; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='$i'>";?></td>
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
                            $row = mysqli_fetch_assoc($select_result);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $row['Question']; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='$i'>";?></td>
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
                            $row = mysqli_fetch_assoc($select_result);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $row['Question']; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='$i'>";?></td>
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
                            $row = mysqli_fetch_assoc($select_result);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $row['Question']; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='$i'>";?></td>
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
                            $row = mysqli_fetch_assoc($select_result);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $row['Question']; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='$i'>";?></td>
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
                            for($i=25;$i<=28;$i++)
                                {
                            $row = mysqli_fetch_assoc($select_result1);
                            $a = $row['Question'];?>
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td><?php echo $row['Question']; ?></td>
                                        <td class="cen"><?php echo "<input type='checkbox' value='$a' name='$i'>";?></td>
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
                        <input type="submit" value="submit" class="btn btn-primary">
                    </div>
                    
                </div>
            </form>
        </div>
        <div class="footer">
            
        </div>
    </body>
</html>
