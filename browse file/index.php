<?php
include("csv.php");
$csv=new csv();
if(isset($_POST['sub']))
{  // var_dump($_FILES['file']);
	$csv->import($_FILES['file']['tmp_name']);
}
?>
<html>
<head>
<title>
</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="sub" value="import">
</form>
</body>
</html>
