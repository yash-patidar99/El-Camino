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
       
        
    </style>
    </head>
    <body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <div class="container-fluid">
        <?php
        include("admin_header.php");
        ?>
           
        <h1 class="text-center">All Rides !!</h1><hr width=30%> 
<div class="jumbotron text-center ">
   <?php
$con=mysqli_connect("localhost","root","","carpooling");
if(!$con)
{
    die("Server Couldn't be connected");
}
$sql="select * from rides ";
$rs=mysqli_query($con,$sql);
echo "<table border=1 width=100%> 
<tr><th>Name</th><th>Source</th><th>Destination</th>";
while($row=mysqli_fetch_assoc($rs))
{
    echo "<tr align=center>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Source"]."</td>";
    echo "<td>".$row["Destination"]."</td>";
    echo "</tr>";
    
    
}
echo "</table>";
?>
    
            </div>
        </div>
        </form>
    </body>
</html>