<?php

$con=mysqli_connect("localhost","root","","carpooling");
if(isset($_POST["update"]))
{
$email=$_POST["email"];
$imagename=$_FILES["img"]["name"];
$imagepath="Profile Pic\\".$imagename;
move_uploaded_file($_FILES["img"]["tmp_name"],$imagepath);
$sql="update client1 set Profile_Pic='".$imagename."' where Email='".$email."'";
$rs=mysqli_query($con,$sql);
}

?>

<html>
<head>
     <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
     <style type="text/css">
         .box-shadow
         {
    box-shadow:0 0.25rem 0.75rem rgba(0,0,0,.05);
    }
        .border-bottom{
            
            border-bottom: 1px solid #161616;
        }
         .img{
             margin-left: 50px;
         }
         .drake
         {
             margin-left: 310px;
         }
         .img1{
             margin-left: 50px;
         }
         .btn1
         {
             margin-top: 50px;
             margin-left: 600px;
         }
         .d1
         {
             margin-left: 200px;
         }
         .d2
         {
             
            margin-top: 10px;
            margin-bottom: 10px;
            align-items: center;
            line-height: 50px;
            border-radius: 16px;
            border:solid 1px #EDEDED;
            
         }
    </style>
    
    </head>
    <body>
    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
        <?php
        include("user_header.php");    
            ?>
        <div class="jumbotron mt-5" style="background:white;">
            <h2 class="text-center">Profile Pic Update</h2><hr width="30%">
            
            <p class="lead mt-5 text-center"><b>Current Photo</b><img class="img rounded-circle" src="<?php echo $value["Profile_Pic"]?>"><br></p>
            <p class="lead mt-5 text-center d1"><b>Email id</b><input type="email" class="img d2" name="email" value="<?php echo $value["Email"]?>" readonly size="30"></p>
            <p class="lead mt-5 text-center drake">
                <b>Upload Photo </b><input type="file" class="img1 " value="Change photo" name="img" >
            </p>
            <button class="btn btn-info btn-lg btn1" name="update">Update</button>
            </div>
                     </div>
        
   
            
        </form>
    </body>
</html>
            

            
            
            
            
            
            
