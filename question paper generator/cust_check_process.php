<?php
require "include\common.php";
session_start();
if(isset($_SESSION['name'])){
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $branch = $_SESSION['branch'];
    $sub = $_SESSION['sub'];
    $sem = $_SESSION['sem'];
    $time = $_SESSION['time'];
    $mark = $_SESSION['mark'];
    $date = $_SESSION['date'];
}else
{
    header('location:login.php');
}
if(isset($_POST['submit'])){
    if(isset($_POST['question'])){
        $ques = $_POST['question'];
        $num = count($ques);
    }
    if(isset($_POST['question1'])){
        $ques1 = $_POST['question1'];
        $num1 = count($ques1);
    }
    if(isset($_POST['question2'])){
        $ques2 = $_POST['question2'];
        $num2 = count($ques2);
    }
    if(isset($_POST['question3'])){
        $ques3 = $_POST['question3'];
        $num3 = count($ques3);
    }
    if(isset($_POST['question4'])){
        $ques4 = $_POST['question4'];
        $num4= count($ques4);
    }
    if(isset($_POST['question5'])){
        $ques5 = $_POST['question5'];
        $num5 = count($ques5);
    }
    }
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
                    <p  class="">Paper /  <?php echo $sub; ?>                                                        
               <?php echo $sem; ?>/ <?php echo $branch; ?> / CREDIT BASE I /  <?php echo $date; ?> </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xs-9 note">
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
            
            <div class="row note">
                <div class="col-lg-1 col-md-1 col-xs-1">Q1.</div>
                <div class="col-lg-10 col-md-10 col-xs-10">
                    <div class="row note1">Attempt any Four.</div>
                    <div class="row">
                        <ol type="a">
                            <?php for($i=0;$i<=4;$i++)
                                {?>
                            <li><?php if(isset($ques[$i])){echo $ques[$i];} ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                        
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1">[20]</div>
            </div>  
            <div class="row note">
                <div class="col-lg-1 col-md-1 col-xs-1">Q2.</div>
                <div class="col-lg-10 col-md-10 col-xs-10">
                    
                    <div class="row">
                        <ol type="a">
                        <?php for($i=0;$i<=1;$i++)
                                {?>
                            <li><?php if(isset($ques1[$i])){echo $ques1[$i];} ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1">[20]</div>
            </div> 
            
            <div class="row note">
                <div class="col-lg-1 col-md-1 col-xs-1">Q3.</div>
                <div class="col-lg-10 col-md-10 col-xs-10">
                    
                    <div class="row">
                        <ol type="a">
                      <?php for($i=0;$i<=1;$i++)
                                {?>
                            <li><?php if(isset($ques2[$i])){echo $ques2[$i];} ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1">[20]</div>
            </div> 
            
            <div class="row note">
                <div class="col-lg-1 col-md-1 col-xs-1">Q4.</div>
                <div class="col-lg-10 col-md-10 col-xs-10">
                    
                    <div class="row">
                        <ol type="a">
                      <?php for($i=0;$i<=1;$i++)
                                {?>
                            <li><?php if(isset($ques3[$i])){echo $ques3[$i];} ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1">[20]</div>
            </div> 
            
            <div class="row note">
                <div class="col-lg-1 col-md-1 col-xs-1">Q5.</div>
                <div class="col-lg-10 col-md-10 col-xs-10">
                    
                        <div class="row">
                        <ol type="a">
                      <?php for($i=0;$i<=1;$i++)
                                {?>
                            <li><?php if(isset($ques4[$i])){echo $ques4[$i];} ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                    
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1">[20]</div>
            </div>
            
            <div class="row note">
                <div class="col-lg-1 col-md-1 col-xs-1">Q6.</div>
                <div class="col-lg-10 col-md-10 col-xs-10">
                    <div class="row note1">Write short note on following <b>(Any four)</b></div>
                    
                        <div class="row">
                        <ol type="a">
                      <?php for($i=0;$i<=4;$i++)
                                {?>
                            <li><?php if(isset($ques5[$i])){echo $ques5[$i];} ?></li>
                            <?php } ?>
                        </ol>
                    </div>
                  
                    
                </div>
                <div class="col-lg-1 col-md-1 col-xs-1">[20]</div>
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
