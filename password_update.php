<?php
$con=mysqli_connect("localhost","root","","carpooling");
if(isset($_POST["password_update"]))
{
$email=$_POST["email"];
$password=$_POST["old_password"];
$n_password=$_POST["new_password"];    
$query="select * from client1 where Email='".$email."'";
$rs=mysqli_query($con,$query);
$value=mysqli_fetch_assoc($rs);
if($value["Password"]==$password)
{    
    
$sql="update client1 set Password='".$n_password."' where Email='".$email."'";
$rs1=mysqli_query($con,$sql);

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
          .align{
            margin-top: 10px;
            margin-bottom: 10px;
            align-items: center;
            line-height: 50px;
            border-radius: 16px;
            border:solid 1px #EDEDED;
            
        }
          .btn1
         {
             margin-top: 50px;
             margin-left: 80px;
         }
    </style>
    </head>
    <body>
    <form action="<?php $_PHP_SELF ?>" method="post">
       <div class="container-fluid"><?php
        include("user_header.php");
        ?>
           <div class="jumbotron text-center" style="background:white;">
               <h2>Update Password</h2><hr width=30%>
            Name      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="align mx-3 p-2"  value="<?php echo $value["Name"] ?>" size="50" readonly><br>
            Email     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" class="align mx-3 p-2" name="email" value="<?php echo $value["Email"] ?>" size="50" readonly><br>
            Mobile No <input type="text" class="align mx-3 p-2" value="<?php echo $value["Mobile_No"] ?>" size="50" readonly><br>
            Old Password <input class="align mx-3 p-2" type="password" name="old_password" size="50"><br>
            New Password <input  class="align mx-3 p-2" type="password" name="new_password" size="50"><br>  
            <button class="btn btn-info btn-lg btn1" name="password_update">Update</button>   
            </div>
        </div>
        </form>
    
    </body>
</html>
