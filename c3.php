<?php
if(isset($_POST["search"]))
{
   $search=$_POST["search"];
        if($search=="profile")
    header("location:c1.php");
        if($search=="forgot password")
    header("location:c2.php");
    if($search=="price")
    header("location:c3.php");
    if($search=="ride")
    header("location:c4.php");
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
        #search{
            
            margin-left: 320px;
            border-width: 1px 1px 1px 1px;
            
            border-radius: 4px;
            line-height: 50px;
            
        }    
        #check{
            margin-top: 30px;
            margin-left: 550px;
            width: 20%;
            border-radius: 10px;
        }
    </style>
    </head>
    <body>
        <form name="frm"  action="<?php $_PHP_SELF ?>" method="post">
    <?php
    include("header.php");    
        ?>
            <h3 class="text-center mt-5 p-5 text-muted">What can we help with?</h3><br>
            <input id="search"class="mt-1"type="text" name="search" placeholder="&nbsp;&nbsp;&nbsp;Ex. Profile photo ,lost password...." size="100"><br>
            <input id ="check" type="button" class="btn btn-primary btn-lg mb-4" onclick="check();" value="Search">
            <div class="jumbotron" style="background:white;"><hr>
            <h3 class="display-5 text-center">How do pricing and payment work?</h3><hr>
            <p class="text-justify">Prices are fixed when a car owner offers a ride. They are non-negotiable and the same for all co-travellers. The price is always based on a suggestion calculated Cruize according to the itinerary and real costs incurred by car owners. Car owners are free to adjust the price within reason, to account for the comfort of their car or their willingness to make a detour. The price cannot exceed a ceiling set by Cruize, in order to ensure costs are fairly shared and that car owners do not make a profit. Price per passenger is limited to a partial contribution towards the cost of the journey, and does not allow the driver to make a profit.

Payment is made in cash, in the car, generally at the journey's outset.</p>
            </div>
            <?php
            include("footer.php");
            ?>
        </form>
    </body>
</html>