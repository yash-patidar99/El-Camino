<h2 class="text-center">Availbale Rides !!!</h2><hr width=30%>
<?php
$con=mysqli_connect("localhost","root","","carpooling");
if(!$con)
{
    die("Server Couldn't be connected");
}
$sql="select * from rides ";
$rs=mysqli_query($con,$sql);
echo "<table border=1 width=100%> 
<tr><th>Name</th><th>Source</th><th>Destination</th><th>Details</th>";
while($row=mysqli_fetch_assoc($rs))
{
    echo "<tr align=center>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Source"]."</td>";
    echo "<td>".$row["Destination"]."</td>";
    echo "<td>"."<a href='booknow.php' class='btn btn-danger btn-block'>Get Details</a>"."</td>";
    echo "</tr>";
    
    
}
echo "</table>";
?>