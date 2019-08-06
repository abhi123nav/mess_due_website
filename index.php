<?php
/*require 'mess1.php';
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
         
     }*/
$name=$_GET['name'];
$rollno=$_GET['rollno'];

?>

<html>
    <head>
        <style>
           
        </style>
    </head>
    <body>
     <?php echo $name;?><br>
<?php echo $rollno;  ?>
    </body>
</html>