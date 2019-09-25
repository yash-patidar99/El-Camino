<?php
$status=1;
$state=0;
if(isset($_POST["login"]))
{
    session_start();

    include("connect.php");
    $email=$_POST["Email"];
    $password=$_POST["Password"];
    $query="select * from client1 where Email='".$email."'";
    $rs=mysqli_query($con,$query);
    $value=mysqli_fetch_assoc($rs);
    if($email=='admin@gmail.com' and $password=='admin')
    {
        header("location:admin.php");
    }
    if($value["Password"]==$password){
        if($value["State"]=="Active" or $value["State"]==NULL){
        $_SESSION["UserName"]=$email;
        header("location:user_dashboard.php");
        }
        else{
            $state=0;
        }
}
else

    $status=0;
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
        #leave{
            border-radius: 4px;
            line-height: 45px;
            background: #f5f5f5;
        }
        #going{
               border-radius: 4px;
            line-height: 45px;
            background: #f5f5f5;
            
        }
        .box-shadow{
    box-shadow:0 0.25rem 0.75rem rgba(0,0,0,.05);
    }
        .border-bottom{
            
            border-bottom: 1px solid #161616;
        }    
        .car-width
        
        {
            max-width: 730px;
            
        }
        #find{
            
            border-radius: 20px;
        }
.a1{
    text-decoration: none;
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
    <h2 class="text-center text-dark" id="heading1">Enter Your Email and Password ?</h2>
        <input id="email" type="email" name="Email" placeholder="&nbsp;&nbsp;&nbsp;Enter Email" autofocus size="80"><br>
        <input id="password" type="password" name="Password" placeholder="&nbsp;&nbsp;&nbsp;Enter Password" autofocus size="80"> <br>
        <button id="btn1" type="submit" class="btn btn-primary btn-lg" name="login">Login</button><br>
        <a href="forgot.php" class="fgt" style="color:deepskyblue;"><b>Forgot Password?</b></a>
        <div>
            <p class="text-dark mt-3 mb-5 still"><b>Hey! Looking for an account? <a href="signup.php" id="sign">&nbsp;&nbsp;Signup</a></b></p></div>
        
        <div class="text-center mb-4">
    <?php
    if($status==0)
        echo "<font color=red size=6>Invalid Email or Password!!</font>";
            ?></div>
        <?php
    include("footer.php");    
        ?>    
    </form>
    </body>
</html>  