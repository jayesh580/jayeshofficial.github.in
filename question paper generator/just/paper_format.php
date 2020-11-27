<?php 
require "include\common.php";
$query="SELECT * FROM `question` WHERE Subject='HMI' AND Mark = 10 order by rand() limit 20";
$select_result=mysqli_query($con,$query)or die(mysqli_error($con));
$query5mark="SELECT * FROM `question` WHERE Subject='HMI' AND Mark = 5 order by rand() limit 14";
$select_result1=mysqli_query($con,$query5mark)or die(mysqli_error($con));
//$total = mysqli_num_rows($select_result);
//echo $total; 
?>
<!DOCTYPE html>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 details">
                    <p  class="">Paper / Subject Code: 52707 / Human Machine Interaction                                                        
               B.E. SEM VII/ COMP / CREDIT BASE I   MAY2019 / 20.05.2019 </p>
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
                                <td>Max.Marks: 80</td>
                            </tr>
                            <tr>
                                <td>Time: 3 hours</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row note">
                <div class="col-lg-1">Q1.</div>
                <div class="col-lg-10">
                    <div class="row note1">Attempt any Four.</div>
                    <div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=5)
                        {
                        $row = mysqli_fetch_assoc($select_result1);
                        
                        ?>
                            <li><?php echo $row['Question']; ?></li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                        
                </div>
                <div class="col-lg-1">[20]</div>
            </div>
            <div class="row note">
                <div class="col-lg-1">Q2.</div>
                <div class="col-lg-10">
                    
                    <div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=2)
                        {
                        $row = mysqli_fetch_assoc($select_result);
                        
                        ?>
                            <li><?php echo $row['Question']; ?></li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1">[20]</div>
            </div>
            <div class="row note">
                <div class="col-lg-1">Q3.</div>
                <div class="col-lg-10">
                    
                        <div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=2)
                        {
                        $row = mysqli_fetch_assoc($select_result);
                        
                        ?>
                            <li><?php echo $row['Question']; ?></li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1">[20]</div>
            </div>
            <div class="row note">
                <div class="col-lg-1">Q4.</div>
                <div class="col-lg-10">
                    
                        <div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=2)
                        {
                        $row = mysqli_fetch_assoc($select_result);
                        
                        ?>
                            <li><?php echo $row['Question']; ?></li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1">[20]</div>
            </div>
            <div class="row note">
                <div class="col-lg-1">Q5.</div>
                <div class="col-lg-10">
                    
                        <div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=2)
                        {
                        $row = mysqli_fetch_assoc($select_result);
                        
                        ?>
                            <li><?php echo $row['Question']; ?></li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1">[20]</div>
            </div>
            <div class="row note">
                <div class="col-lg-1">Q6.</div>
                <div class="col-lg-10">
                    <div class="row note1">Write short note on following <b>(Any four)</b></div>
                    
                        <div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=5)
                        {
                        $row = mysqli_fetch_assoc($select_result1);
                        
                        ?>
                            <li><?php echo $row['Question']; ?></li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                  
                    
                </div>
                <div class="col-lg-1">[20]</div>
            </div>
            <div class="row">
                    <div class="col-lg-offset-5 col-lg-2">
                        <input type="submit" value="Print" class="btn btn-primary" onclick="myFunction()">
                    </div>
     </div>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
            function myFunction()
            {
                window.print();
            }
        </script>
        <div class="footer">
            
        </div>
        
        </div>
    </body>
</html>
