<?php
session_start();
$con=mysqli_connect("localhost","root","","carpooling");
if(isset($_POST["forgot"]))
{
    $email=$_POST["Email"];
    $password=$_POST["Password"];
    $cnfpassword=$_POST["CnfPassword"];
    $sql="update client1 set Password='".$password."' where Email='".$email."'";
    $value=mysqli_query($con,$sql);
    if($password==$cnfpassword)
    {if($value!=0)
    {
        header("location:login.php");
    }
    }
    else{
        echo "Password And Confirm Password Doesn't Match";
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
         #email{
            margin-left: 380px;
            margin-bottom: 20px;
            margin-top: 50px;
            line-height: 50px;
            border-radius: 16px;
            border:solid 1px #EDEDED;
        }
        #password{
            margin-left: 380px;
            margin-bottom: 20px;
            margin-top: 5px;
            line-height: 50px;
            border-radius: 16px;
            border:solid 1px #EDEDED;
        }
        #heading1{
            margin-left: 50px;
            margin-top: 150px;
        }
        #btn1{
            margin-left: 550px;
            width: 20%;
        }
        .still{
            margin-left: 390px;
        }
        #sign{
            color: deepskyblue;
        }
        .fgt{
            margin-left: 390px;
            margin-top: 1px;
        }
    
    </style>
    </head>
    <body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <?php
        include("header.php");
    ?>    
    <h2 class="text-center text-dark" id="heading1">Enter Your Email and New Password ?</h2>
        <input id="email" type="email" name="Email" placeholder="&nbsp;&nbsp;&nbsp;Enter Email" autofocus size="80"><br>
        <input id="password" type="password" name="Password" placeholder="&nbsp;&nbsp;&nbsp;Enter New Password" autofocus size="80"> <br>
        
        <input id="password" type="password" name="CnfPassword" placeholder="&nbsp;&nbsp;&nbsp;Confirm Password" autofocus size="80"> <br>
        <button id="btn1" type="submit" class="btn btn-primary btn-lg" name="forgot">Set Password</button><br>
        
    
        
        </form>
    
    </body>
</html>