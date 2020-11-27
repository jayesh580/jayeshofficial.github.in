<?php
require "include\common2.php";
    $subject="SELECT * FROM `subject`";
    $subject_result=mysqli_query($conn,$subject)or die(mysqli_error($conn));
    $branch1="SELECT * FROM `branch`";
    $branch_result=mysqli_query($conn,$branch1)or die(mysqli_error($conn));
    $book="SELECT * FROM `book`";
    $book_result=mysqli_query($conn,$book)or die(mysqli_error($conn));
    $university1="SELECT * FROM `university`";
    $university_result=mysqli_query($conn,$university1)or die(mysqli_error($conn));
   
    
$question = '<div class="col-lg-12 jumbotron">
        <form action="direct_paper_process.php" method="POST">
        <div class="form-group">
            <label for="question" class="control-label" name="question">Enter Question:</label>
            <textarea class="form-control" name="question" rows="3" cols="60" placeholder="Enter Question" name="question"></textarea>   
        </div>    
        <div class="form-group">
            <label for="mark" class="control-label" name="mark">Enter Marks For Question:</label>
            <input class="form-control-static" type="number" id="quantity" name="marks" min="1" max="100">   
        </div>   
        <div class="form-group">
            <label for="type" class="control-label" name="type">Type of Question:</label>
            <select class="form-control" name="type">
                <option value="Brief">Brief</option>
                <option value="Short">Short</option>
                <option value="Defination">Defination</option>
                <option value="Maths">Maths</option>
                <option value="MCQ">MCQ</option>
            </select>  
        </div>      
        <div class="form-group">
            <label for="sub" class="control-label" name="sub">Select Subject:</label>
            <select class="form-control" name="sub">
                <?php 
                while($subject1=mysqli_fetch_array($subject_result))
                {?>
                <option value="<?php echo $subject1[\'Subject_name\']; ?>"><?php echo $subject1[\'Subject_name\']; ?></option>
                <?php } ?>
            </select>    
        </div>     
        <div class="form-group">
            <label for="branch" class="control-label" name="sub">Select Branch:</label>
            <select class="form-control" name="branch">
                <?php 
                while($branch=mysqli_fetch_array($branch_result))
                {?>
                <option value="<?php echo $branch[\'Branch_name\']; ?>"><?php echo $branch[\'Branch_name\']; ?></option>
                <?php } ?>
            </select>    
        </div> 
        <div class="form-group">
            <label for="book" class="control-label" name="sub">Select Books:</label>
            <select class="form-control" name="book">
                <?php 
                while($book=mysqli_fetch_array($book_result))
                {?>
                <option value="<?php echo $branch1[\'B_Author_name\']; ?>"><?php echo $branch1[\'B_Author_name\']; ?></option>
                <?php } ?>
            </select>    
        </div> 
        <div class="form-group">
            <label for="module" class="control-label" name="module">Select Module:</label>
            <select class="form-control" name="module">
                <?php 
                for($i=1;$i<=15;$i++)
                {?>
                <option value="<?php echo \'Module\'.\' \'.$i; ?>"><?php echo \'Module\'.\' \'.$i; ?></option>
                <?php } ?>
            </select>    
        </div>            
        <div class="form-group">
            <button class="btn btn-block btn-primary" name="bt">Submit</button>                       
        </div>
    </form>
</div>';   

$university = '<div class="col-lg-12 jumbotron">
        <form action="direct_paper_process.php" method="POST">
        <div class="form-group">
            <label for="uni" class="control-label" name="uni">Enter university name:</label>
            <input type="text" class="form-control" placeholder="Enter university name" name="University_name">  
        </div>           
        <div class="form-group">
            <button class="btn btn-block btn-primary" name="bt">Submit</button>                       
        </div>
    </form>
</div>';

$collage = '<div class="col-lg-12 jumbotron">
        <form action="direct_paper_process.php" method="POST">
        <div class="form-group">
            <label for="uni" class="control-label" name="uni">Select University:</label>
            <select class="form-control" name="university">
                <?php 
                while($university=mysqli_fetch_array($university_result))
                {?>
                <option value="<?php echo $university[\'University_name\']; ?>"><?php echo $university[\'University_name\']; ?></option>
                <?php } ?>
            </select>    
        </div>              
        <div class="form-group">
            <label for="clg" class="control-label" name="clg">Enter Collage name:</label>
            <input type="text" class="form-control" placeholder="Enter collage name" name="collage_name">  
        </div>           
        <div class="form-group">
            <button class="btn btn-block btn-primary" name="bt">Submit</button>                       
        </div>
    </form>
</div>';

$subject1 = '<div class="col-lg-12 jumbotron">
        <form action="direct_paper_process.php" method="POST">
        <div class="form-group">
            <label for="subject_name" class="control-label" name="subject_name">Enter Subject Name:</label>
            <input type="text" class="form-control" placeholder="Enter subject name" name="subject_name">  
        </div>         
        <div class="form-group">
            <label for="branch" class="control-label" name="sub">Select Branch:</label>
            <select class="form-control" name="branch">
                <?php 
                while($branch=mysqli_fetch_array($branch_result))
                {?>
                <option value="<?php echo $branch[\'Branch_name\']; ?>"><?php echo $branch[\'Branch_name\']; ?></option>
                <?php } ?>
            </select>    
        </div> 
        <div class="form-group">
            <label for="semister" class="control-label" name="semister">Select Semister:</label>
            <select class="form-control" name="semister">
                <?php 
                for($i=1;$i<=8;$i++)
                {?>
                <option value="<?php echo \'Semister\'.\' \'.$i; ?>"><?php echo \'Semister\'.\' \'.$i; ?></option>
                <?php } ?>
            </select>    
        </div>            
        <div class="form-group">
            <button class="btn btn-block btn-primary" name="bt">Submit</button>                       
        </div>
    </form>
</div>';

$branch = '<div class="col-lg-12 jumbotron">
        <form action="direct_paper_process.php" method="POST">
        <div class="form-group">
            <label for="branch" class="control-label" name="branch">Enter Branch Name:</label>
            <input type="text" class="form-control" placeholder="Enter branch name" name="Branch_name">  
        </div>           
        <div class="form-group">
            <button class="btn btn-block btn-primary" name="bt">Submit</button>                       
        </div>
    </form>
</div>';
?>