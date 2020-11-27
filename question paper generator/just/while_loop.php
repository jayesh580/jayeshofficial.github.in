<div class="row">
                    <div class="col-lg-1">Q1.</div>
                    <div class="col-lg-10 bor">
                    <?php 
                    $i = 1;
                    while ($i<=6)
                        {
                        $row = mysqli_fetch_assoc($select_result1);
                        $a = $row['Q_id'];?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-1"><?php echo $i; ?></div>
                                <div class="col-lg-10"><?php echo $row['Question']; ?></div>
                                <div class="col-lg-1"><?php echo "<input type='checkbox' value=' $a' name='$i'>"."<br>";
                                ?></div>
                            </div>
                        </div>
                   <?php 
                   $i++;
                        }
                    ?>
                    </div>
                    <div class="col-lg-1">[20]</div>
                </div> 



<div class="row">
                <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=5)
                        {
                        $row = mysqli_fetch_assoc($select_result1);
                        $a = $row['Q_id'];
                        ?>
                            <li><?php 
                            if (isset($_REQUEST['1'])){
                                echo $_REQUEST['1'];
                            }
                            else{
                                echo $row['Question']; }
                                ?>
                                
                            </li>
                        <?php 
                        $i++;
                        } 
                        ?> 
                </ol>
            </div> 


<?php 
                $b = $_POST[$i];
                $row = mysqli_fetch_assoc($select_result);
                $checked="SELECT * FROM `question` WHERE Q_id='$b'";
                $select_result2=mysqli_query($con,$checked)or die(mysqli_error($con));
                $row = mysqli_fetch_assoc($select_result2);
                echo $row['Question']; 
                ?>


<div>
                
                <?php
                $i=1;
                while ($i<=28)
                    {
                    ?>
               
                <div><?php echo $i; 
                
                ?></div>
                
                <?php
                $i++;
                }
                ?>
            </div>



                    For loop
            <div class="col-lg-offset-1 col-lg-2">
                <?php
                    for($i=3;$i<=17;$i++)
                    {
                        echo "$i<br/>";
                        if($i==10)
                            break;
                    }
                ?>
                </div>

<div class="row">
                        <ol type="a">
                            
                    <?php 
                    $i = 1;
                    while ($i<=5)
                        {
                        if(isset($_REQUEST[$i])){?>
                            
                        <li><?php echo $_REQUEST[$i]; ?></li>
                        
                        <?php } ?>
                        
                        <?php 
                        $i++;
                        } 
                        ?> 
                        </ol>
                    </div>
                    <div class="row"> 
                    <?php 
                    function loop()
                    {
                        require "include\common.php";
                        $query5mark="SELECT * FROM `question` WHERE Subject='HMI' AND Mark = 5 order by rand() limit 14";
                        $select_result1=mysqli_query($con,$query5mark)or die(mysqli_error($con));
                    $i = 1;
                    while ($i<=5)
                        {
                        $row = mysqli_fetch_assoc($select_result1);
                        ?>
                            
                                <?php if(isset($_REQUEST[$i]))
                                {
                                    echo $_REQUEST[$i].'<br>';
                                } 
                                
                            ?>
                            
                        <?php 
                        
                        $i++;
                        } 
                        }
                        ?> 
                    </div>
                        
                </div>
                
                
                 <?php 
            $n = 1;
            while ($n<=28){?>
                <?php $i++;    
            }
            ?> 