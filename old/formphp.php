<?php
$n=$_GET['name'];
$a=$_GET['age'];
$p=$_GET['password'];
echo "hello $n your age is $a and password is $p";
?>
<html>
<head>
</head>
<body>
<form>            <!r can here only once put method="GET"*/!>
NAME;<input type="text" name="name" action="formphp.php" method="GET"><br>
AGE;<input type="text" name="age" action="formphp.php" method="GET"><br>
password;<input type="password" name="password" action="formphp.php" method="GET"><br>
<input type="submit" value="click to submit">
</form>
</body>
</html>