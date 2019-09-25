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
    
    </style>
    </head>
    <body>
        <form>
    <?php
    include("header.php");    
        ?>
        <h1 class="display-5 text-center">How it works</h1>
        <div class="jumbotron" style="background:white;">
        <div class="row">
            <div class="col-md-4">
                <h3 class="lead"><b>1. Easy access to ride</b></h3><hr>
            <p>Just enter your departure and arrival points and your travel date, then choose a car owner going your way. If you have a question, you can ask the car owner before booking.</p>
            </div>
            <div class="col-md-4">
            <h3 class="lead"><b>2. Online Booking available</b></h3><hr>
            <p>Book your seat online. You’ll get the car owner's phone number to arrange the final details.</p>    
            </div>
            <div class="col-md-4">
            <h3 class="lead"><b>3. Car sharing in a Nutshell</b></h3><hr>
            <p>Bring exact change to pay the car owner the agreed contribution during the ride.</p>    
            </div>
            </div>
            
        
        </div>
        <?php
        include("footer.php");
        ?>
        
        </form>
    </body>
</html>