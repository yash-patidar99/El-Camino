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
            <div class="jumbotron" style="background:white;">
            <h3 class="display-5 text-center">What should I do if I forget my password?</h3><hr>
            <p class="text-justify">All is not lost! Here you can create a new password if you’ve forgotten your old one.<br>

Just enter the email you use for Cruize and we’ll send an email with a link to change your password.<br>

Can’t find the email? Try checking your spam, you never know!<br>

Found the email but the link isn’t working? If you’ve received a number of emails from us inviting you to update your password, make sure you open the most recent one that we sent. If you have any doubts, delete all the emails you received to update your passenger and ask for a new one on our website or app.<br>

The link in the email is only valid for 24 hours too! If it’s been more than 24 hours, you’ll need to ask us to send a new link.</p>
            </div>
            <?php
            include("footer.php");
            ?>
        </form>
    </body>
</html>