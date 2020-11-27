<?php
require "include\common2.php";
session_start();
if(isset($_SESSION['name'])){
    $U_id = $_SESSION['uid'];
}else
{
    header('location:login.php');
}
$all = "SELECT q.Q_id,q.Question,q.Marks,q.Type,s.Subject_name,s.Semister,b.Branch_name,u.Username FROM question q INNER JOIN subject s ON q.Sub_id = s.Sub_id INNER JOIN branch b ON q.Br_id = b.Br_id INNER JOIN user_tb u ON q.U_id = u.U_id";
$all1=mysqli_query($conn,$all)or die(mysqli_error($conn));
$c= mysqli_num_rows($all1);
if(isset($_GET['type']) && $_GET['type']!=''){
    	$type= mysqli_real_escape_string($conn,$_GET['type']);
    	if($type=='delete'){
		$id=mysqli_real_escape_string($conn,$_GET['id']);
		$delete_sql="DELETE FROM `question` WHERE `question`.`Q_id` = '$id'";
		mysqli_query($conn,$delete_sql);
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">       
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'include/navbar.php';?>
        <div class="container-fluid">
            <div class="container">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <table border="1" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cen">Sr No.</th>
                                        <th class="cen">Question</th>
                                        <th class="cen">Marks</th>
                                        <th class="cen">Type</th>
                                        <th class="cen">User Name</th>
                                        <th class="cen">Subject</th>
                                        <th class="cen">Branch</th>
                                        <th class="cen">Delete</th>
                                    </tr>
                                </thead>
                                <?php 
                            for($i=1;$i<=$c;$i++)
                                {
                            $row = mysqli_fetch_assoc($all1);
                            $question = $row['Question'];
                            $marks = $row['Marks'];
                            $type = $row['Type'];
                            $username = $row['Username'];
                            $sub1 = $row['Subject_name'];
                            $branch_b = $row['Branch_name'];
                            $id = $row['Q_id'];
                            ?>                                
                                <tbody>
                                    <tr>
                                        <td class="cen"><?php echo $i; ?></td>
                                        <td class=""><?php echo $question; ?></td>
                                        <td class="cen"><?php echo $marks ;?></td>
                                        <td class="cen"><?php echo $type ;?></td>
                                        <td class="cen"><?php echo $username ;?></td>
                                        <td class="cen"><?php echo $sub1 ;?></td>
                                        <td class="cen"><?php echo $branch_b ;?></td>
                                        <td class="cen">
                                            <a class=" btn btn-primary" href='?type=delete&id=<?php echo $id ?>'>Delete</a>
                                        </td>
                                    </tr>
                                </tbody>  
                                <?php } ?>                                
                                </table>                                
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>                          