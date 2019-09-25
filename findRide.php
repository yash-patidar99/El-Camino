<?php
if(isset($_POST["pool"]))
{
    header("location:offer.php");
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
            line-height: 45px;
            
             border-radius: 16px;
            border:solid 1px #EDEDED;
           
        }
        #going{
            line-height: 45px;
            border-radius: 16px;
            border:solid 1px #EDEDED;
            
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
    
    
    </style>

    </head>
<body>
    
    <form action="<?php $_PHP_SELF ?>" method="post">
    
        <?php
        include("user_header.php");
        ?>
        <?php
        include("show_ride.php");
        ?>
        
        <div class="text-center mt-5 mb-5">
        <h2 class="mb-5">Make your Own Pool!! </h2>
        <button class="btn btn-outline-primary btn-lg" name="pool">Make Pool</button>
        </div>
        <?php
        include("footer1.php");
        ?>
        
        
        
    
    
    
        
    </form>
    
</body>
    
</html>