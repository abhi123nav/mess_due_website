<?php
$w=mysqli_connect("localhost","root","");
mysqli_select_db($w,"testdb");
$s="select * from mess1";
$resource=mysqli_query($w,$s);

if(isset($_GET['name'])&&isset($_GET['rollno']))
{    $name1=$_GET['name'];
    $name=strtolower("$name1");
 //convert name to either lower or upper case
    $rollno=$_GET['rollno'];
    if(!empty($name)&&!empty($rollno))
    {
     $query ="SELECT id FROM mess1 WHERE name='".$name."'AND rollno='".$rollno."'";
        
             $result= mysqli_query($w,$query); 
                // echo mysqli_num_rows($result);                                                    
             if(mysqli_num_rows($result)==1)                                                     
              {  
                $sql = "SELECT * from mess1 WHERE name='".$name."'AND rollno='".$rollno."'";
                $result = mysqli_query($w, $sql);
                while($row = $result->fetch_assoc()) 
                    {
                    echo "NAME : ".$row["name"]."<br>";
                    echo  "ROLLNO : ".$row["rollno"]."<br>";
                    echo  "DUE : ".$row["due"]."<br>";
                     }
                                                                       // echo "valid";
                exit();                                                                           
              }                                                                                
              else                                                                                 
              {  
               echo "invalid";                                                                         
                                                                                                    
              }                                                                                    
                                                                                                    
     }
    else
{
    echo "fill  both your name and rollno";
}
}


    /*{ 
    $ser=$_GET['rollno'];
    $query="SELECT *FROM 'rollno' where rollno='ser'";
    $result=mysqli_query($w,$query);
      if($mysqli_num_rows==1)
     {
           $row=mysqli_fetch_row($resource);
            echo "due is"."$row[3]";
     }
    
}*/
 /* while($row=mysqli_fetch_row($resource))
{
   echo "id:".$row[0]."<br>";
   echo "name:".$row[1]."<br>";          //." ".$row[2]."<br>";
   echo "rollno:".$row[2]."<br>";
   echo "due:".$row[3]."<br>";
    echo "<hr>";
}*/
?>
<html>
<head>
</head>
<body>
<form>       
    <!r can here only once put method="GET"*/!>
    ENTER YOUR FULL NAME AND ROLL NO TO KNOW YOUR MESS DUE<br>
name;<input type="text" name="name" action="mess1.php" method="GET"><br>
rollno;<input type="text" name="rollno" action="mess1.php" method="GET"><br>
<input type="submit" value="click to submit">
</form>
</body>
</html>