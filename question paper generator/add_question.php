<?php
require "include\common2.php";
session_start();
if(isset($_SESSION['name'])){
    $name1 = $_SESSION['name'];
    $last_name = $_SESSION['last_name'];
    $subject="SELECT * FROM `subject`";
    $subject_result=mysqli_query($conn,$subject)or die(mysqli_error($conn));
    $branch1="SELECT * FROM `branch`";
    $branch_result=mysqli_query($conn,$branch1)or die(mysqli_error($conn));
    $book="SELECT * FROM `book`";
    $book_result=mysqli_query($conn,$book)or die(mysqli_error($conn));
}else
{
    header('location:login.php');
}
$question = '';
$marks = '';
$type = '';
$subject = '';
$branch ='';
if(isset($_GET['id']) && $_GET['id']!=''){
        $id=mysqli_real_escape_string($conn,$_GET['id']);
    	$res=mysqli_query($conn,"select * from `question` where Q_id='$id'");
	$check=mysqli_num_rows($res);
        if($check>0){
            	$row=mysqli_fetch_assoc($res);
                $question = mysqli_real_escape_string($conn,$row['Question']);
                $marks = $row['Marks'];
                $type = $row['Type'];
                $subject_id = $row['Sub_id'];
                $branch_id =$row['Br_id'];
                
    $b = "SELECT * FROM `branch` WHERE Br_id=$branch_id";
    $b1 = mysqli_query($conn,$b)or die(mysqli_error($conn));
    $b2 = mysqli_fetch_assoc($b1);
    $branch = $b2['Branch_name']; 
     
    $s1="SELECT * FROM `subject` WHERE Sub_id=$subject_id && Br_id=$branch_id";
    $s2 = mysqli_query($conn,$s1)or die(mysqli_error($conn));
    $s3 = mysqli_fetch_assoc($s2);
    $subject = $s3['Subject_name'];
                
        }else{
		header('location:my_question.php');
		die();
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
        <div class="container">
        <?php include "include/navbar.php";?>
            <div class="container col-lg-9 col-lg-offset-2 jumbotron">
                <form action="add_question_process.php" method="POST">
                    <table border="0">
                        <thead>
                            <tr>
                                <th colspan="2" class="cen note">Submitt Question</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Enter Question:</td>
                                <td class="cen note"><textarea name="question" rows="3" cols="60" required value="<?php echo $question?>"><?php echo $question?></textarea></td>
                            </tr>
                            <tr>
                                <td>Marks:</td>
                                <td class="cen note"><input type="number" id="quantity" name="marks" min="1" max="100" required value="<?php echo $marks?>"></td>
                            </tr>
                            <tr>
                                <td>Type:</td>
                                <td class="cen note">
                                    <select name="type">
                                        <option value="Brief">Brief</option>
                                        <option value="Short">Short</option>
                                        <option value="Defination">Defination</option>
                                        <option value="Maths">Maths</option>
                                        <option value="MCQ">MCQ</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Subject:</td>
                                <td class="cen note">
                                    <select name="subject">
                                                  <?php 
                                                        while($subject1=mysqli_fetch_array($subject_result))
                                                        {
                                                           if(isset($id) && $id!=''){
                                                            echo "<option value='".$subject."'>".$subject1['Subject_name']."</option>";
                                                            }else{
                                                           echo "<option value='".$subject1['Subject_name']."'>".$subject1['Subject_name']."</option>";
                                                        } }
                                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Branch:</td>
                                <td class="cen note">
                                    <select name="branch">
                                     <?php 
                                    while($branch1=mysqli_fetch_assoc($branch_result))
                                    {
                                    if(isset($id) && $id!=''){
                                        echo "<option value='".$branch1['Branch_name']."'>".$branch1['Branch_name']."</option>";
                                    }else{
                                        echo "<option value='".$branch1['Branch_name']."'>".$branch1['Branch_name']."</option>";
                                        }
                                    
                                    } 
                                    ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Book:</td>
                                <td  class="cen note">
                                    <select name="book">
                                    <?php 
                                    while($book=mysqli_fetch_array($book_result))
                                    {
                                    ?>
                                    <option value="<?php echo $branch1['B_Author_name']; ?>"><?php echo $branch1['B_Author_name']; ?></option>
                                    <?php 
                                    } 
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Module:</td>
                                <td class="cen note">
                                    <select name="module">
                                        <option value="0">0</option>
                                    <?php 
                                        for($i=1;$i<=15;$i++)
                                        {?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="cen note">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit
                                    </button>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
