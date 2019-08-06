<?php 
if($_POST["login"]=="login")
{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["g"];
$l=implode(",",$_POST['l']);
$w = mysqli_connect("localhost","root","");
mysqli_select_db($w, "testdb");
$s="insert into three(fname,lname,gender,language) values ('".$fname."','".$lname."','".$gender."','".$l."')";
mysqli_query($w,$s);
/*if(mysql_query($s))  
echo "record saved";
else 
echo"not saved";
echo "<pre>"
print_r($l);
echo "</pre>";
exit;*/
}
?>
<html>
<head>
</head>
<body>
<form method="post">
enter your name<input type="text" name="fname"><br>
enter your last name<input type="text" name="lname"><br>
gender</br>
 <input type="radio" name="g" value="male">male<br>
       <input type="radio" name="g" value="female">female</br>
languages you like<br>
       <input type="checkbox" name="l[]" value="english">ENGLISH</br>
	   <input type="checkbox" name="l[]" value="hindi">HINDI</br>
       <input type="checkbox" name="l[]" value="telgu">TELGU</br>
	   <input type="checkbox" name="l[]" value="french">FRENCH</br>
<input type="submit" name="login" value="login">
</form>
</body>
</html>
