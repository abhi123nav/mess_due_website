<?php
$w=mysqli_connect("localhost","root","");
mysqli_select_db($w,"testdb");
$s="select * from three";
$resource=mysqli_query($w,$s);
while($row=mysqli_fetch_row($resource))
{
   echo "id:".$row[0]."<br>";
   echo "name:".$row[1]." ".$row[2]."<br>";
   echo "gender:".$row[3]."<br>";
   echo "language:".$row[4]."<br>";
    echo "<hr>";
}
?>