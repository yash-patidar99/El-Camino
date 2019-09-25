<div class="d-flex flex-md-row flex-column align-items-center box-shadow border-bottom p-3 mb-3">
            <h3 class="font-weight-normal my-0 mr-md-auto"><a href="user_dashboard.php"><img src="icon.jpg" class="px-1"></a>&nbsp; Cruize</h3>
    <nav class="my-2 my-md-0 mr-md-3">
        <a href="findRide.php" class="text-muted mx-3"><b>Find a ride</b></a>
        <a href="pic_update.php" class="text-muted mx-3"><b>Profile Pic</b> </a>
        <a href="password_update.php" class="text-muted mx-3"><b>Change Password</b></a>
 
 
        <?php
        session_start();
        if(isset($_POST["logout"]))
{
    header("location:logout.php");
} 

         
         $con=mysqli_connect("localhost","root","","carpooling");
         
        if(isset($_SESSION["UserName"]))
        {
            $sql="select * from client1 where Email='".$_SESSION["UserName"]."' ";
            $rs=mysqli_query($con,$sql);
            $value=mysqli_fetch_assoc($rs);
            echo "<a class='text-dark' href='profile.php'><b>".$value["Name"]."</b></a>";     
        }
            else{
                echo "Welcome";
            }
        
            ?>
           <img class="rounded-circle" style="margin-right:10px;" src="<?php echo $value["Profile_Pic"] ?>">
        <button class="btn btn-outline-danger" name="logout">Logout</button>
                 
         </nav>     
    </div>
        
