<?php
session_start();

$con=mysqli_connect("localhost","root","","carpooling");
if(!$con)
die("connection Failed");
$imagename=$_FILES["img"]["name"];
$imagepath="ProfilePic\\".$imagename;
move_uploaded_file($_FILES["img"]["tmp_name"],$imagepath);
$s="update client1 set Profile_Pic='".$imagename."' where Email='".$value["Email"]."'";
$rs=mysqli_query($con,$s);
$value=mysqli_fetch_assoc($rs);
if($value!=0)
echo "Uploaded successfully";
else
echo "unable to upload";

?>