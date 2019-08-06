
<?php
$host="localhost";
$user="root";
$password="";
$db="domo";
$db=mysqli_connect($host,$user,$password);
mysqli_select_db(demo
                 ,"test");
if(username!==null)
{
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from loginform where user='".$uname."'And pass='".$password."'";
    $result=mysqli_query($sql);
    if(mysqli_num_rows($result)==1) 
    {
        
        echo "loged out";
        exit();
        
    }
    else{
        
        echo "wrong password";
    }
}
?>

<html>
		<head>
		<link rel="stylesheet" type="text/css" href="newstyle.css">
		</head>
		<body>
		<h1 class="heading">NATIONAL INSTITUTE OF TECHNOLOGY</h1>
		<div class ="container" width="500px" height="700px">
		
		<form>
		<div class="form1">
		NAME<input type ="text" name="username" placeholder="enter your name"/>
		</div>
		<div class="form2">
		PASSWORD<input type="password" name="password" placeholder="enter your password"/>
		</div>
		<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>	
		</div>
		</body>
</html>		
