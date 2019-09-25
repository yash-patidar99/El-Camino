<?php
if(isset($_POST["ride"]))
{
    header("location:login.php");
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
    <link href="style.css" rel="stylesheet">
    
    </head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <?php
        include("header.php");
        ?>
        <div class="car-width text-center px-3 mx-auto py-3">
            <h1 class="display-4">Feel the joy</h1>
<p class="lead ">Experience the fervour. The never-ending celebration called India, Drove on Cruize.</p>
 </div>
<div  class="col-sm-12">    
    <img src="b3.jpg" width="100%" height="90%">
</div>
        <div class="mb-4" style="position:absolute;top:820px;left:600px;"><button type="sumbit" class="btn btn-primary btn-lg mb-2" name="ride" >Find a ride</button>
</div>
<br><br>
    <div class="jumbotron  jmb-border " style="background-color:white">    
<div class="mx-auto py-2">
            <h1 class="display-4 text-center font-weight-normal">Go Find En'Route. De partout.</h1>
 </div>     
<div class="row">
<div class="col-md-4">
    <h2 class="px-2">Reliable</h2>
    <p class="lead px-2">With the passion to serve, we make every route the most affordable ride! </p>
    </div>
<div class="col-md-4">
    <h2 class="px-2">Secure</h2>
    <p class="lead px-2">Fully maintained services of the drive and test by our trustworthy Engineers! </p>
    </div>        
<div class="col-md-4">
    <h2 class="px-2">Simple</h2>
    <p class="lead px-2">Enter your exact address to find the perfect ride. Choose who you’d like to travel with. And book!</p>
    </div>        
    
        </div>        
        </div>
    <hr width="88%">   
    <div class="jumbotron mt-0" style="background-color:white">
    <div class="mx-auto py-2">
    <h1 class="display-4 text-center font-weight-normal">Flabbergast Cruize!</h1>    
        </div>    
    <div class="row">
    <div class="col-md-4">
    <h2 class="px-2">Choice</h2>
    <p class="lead px-2">Our roots are deepend across many destinations, wherever you go you will find us at your service!</p>
    </div>    
    <div class="col-md-4">
    <h2 class="px-2">Carpool with confidence</h2>
    <p class="lead px-2">Government ID verification adds another level of security to member profiles!</p>
    </div>    
    <div class="col-md-4">
    <h2 class="px-2">Get going faster</h2>
    <p class="lead px-2">No need to travel across town, catch a ride leaving near you!</p>
    </div> 
 </div>    
</div>    

<?php
    include("footer.php");    
        ?>
 </form>    
</body>


</html>