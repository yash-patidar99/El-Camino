<?php
if(isset($_POST["signup"]))
{
    session_start();  
//include("connect.php");
  $con=mysqli_connect("localhost","root","","carpooling");
    
$client_email=$_POST["client_email"];
$client_name=$_POST["client_name"];
$client_password=$_POST["client_password"];
    if(isset($_POST["radio"]))
    {
$client_Gender=$_POST["radio"];    
    }

$client_mobile=$_POST["client_mobile"];    
$csql="insert into client1 (Email,Name,Password,Gender,Mobile_no) values('".$client_email."','".$client_name."','".$client_password."','".$client_Gender."','".$client_mobile."')";
  
$ins=mysqli_query($con,$csql);
if($ins!=0)
{
    echo "<script>
    alert('You Have Successfully Registered to Cruize , go back and login again !!');
    </script>";
     $_SESSION["UserName"]=$client_email;
    $_SESSION["Photo"]=$client_photo;
    header("location:login.php");

}
    else
    {
        echo "Registration Failed";
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
        #hey
        {
            margin-top: 80px;
        }
    .design
        {
            margin-bottom: 20px;
            margin-top: 20px;
            border-radius: 16px;
            border:solid 1px #EDEDED;
            line-height: 50px;
            padding: 12px 20px;

            
        }
        .d1
        {
            margin-bottom: 20px;
            margin-top: 20px;
            border-radius: 5px;
            border:solid 1px #EDEDED;
            line-height: 50px;
            padding: 12px 20px;
        }
    </style>
    </head>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="post">
    <?php
    include("header.php");    
        ?>
        <div class="jumbotron text-center" style="background:white;">    
        <h3 class="text-center mb-5" id="hey">Hey! Sign up for free and reliable rides !!</h3>
        <input type="email" class="design" name="client_email" placeholder="Enter Email" size="70"><br>
        <input type="text" name="client_name" class="design" placeholder="Enter Name" size="70"><br>
        <input type="password" name="client_password" class="design" placeholder="Enter Password" size="70"><br>
            <p class="lead">Gender</p><hr width="10%"><input type="radio" value="M" name="radio">Male&nbsp;&nbsp;&nbsp;<input type="radio" name="radio" value="F">Female <br>  
        <input type="text" class="design" name="client_mobile" placeholder="Enter Mobile Number " size="70"><br>
        
        <button type="submit" name="signup" class="btn btn-primary btn-lg mt-3 mb-3">Signup</button>    
            </div>    
            
    <?php
    include("footer.php");        
            ?>        
            
        </form>
    </body>
</html>