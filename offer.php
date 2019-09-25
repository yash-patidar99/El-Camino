<?php

$con=mysqli_connect("localhost","root","","carpooling");
if(isset($_POST["pool"]))
{
    $name=$_POST["name"];
    $source=$_POST["source"];
    $destination=$_POST["dest"];
    $mobile=$_POST["mobile"];
    $sql="insert into rides (Name,Source,Destination,Mobile_No) values('".$name."','".$source."','".$destination."','".$mobile."')";
    $value=mysqli_query($con,$sql);
    if($value!=0)
    {
        header("location:register.php");
    }
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
    <style type="text/css">
        .box-shadow{
    box-shadow:0 0.25rem 0.75rem rgba(0,0,0,.05);
    }
        .border-bottom{
            
            border-bottom: 1px solid #161616;
        }    
            
        .align{
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
    <form action="<?php $_PHP_SELF ?>" method="post">
       <?php
        include("user_header.php");
        ?>
        <h1 class="text-center mt-5">Create a Pool !!</h1>
        <div class="jumbotron text-center mb-5" style="background:white;">
        <input type="text"  class="align p-2" placeholder="Enter Name" name="name" size="70"><br>
        
            <input type="text"  class="align p-2" placeholder="Enter Source Place" name="source" size="70"><br>
        <input type="text"  class="align p-2" placeholder="Enter Destination Place" name="dest" size="70"><br>
        <input type="tel" class="align p-2" placeholder="Enter your mobile number" name="mobile" size="70">  <br>
        <button class="btn btn-primary btn-lg mt-3" name="pool">Let's Pool</button>    
            
        
        </div>
        <?php
        include("footer1.php");
        ?>
        
        
        </form>
    </body>
</html>
