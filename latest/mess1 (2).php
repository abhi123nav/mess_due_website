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
<head>
<title>
</title>
<head>

    <style>
        body{
    
    margin: 0px;
    padding: 0px;
       

    
}
h1{
    position: absolute;
 top: 50px;
    left:300px;
    text-align: center;
    color:red;
}
.container{
    border-radius: 5px;
    position: absolute;
    top:200px;
    left:530px;
    background-color: darkgray;
    width:300px;
    height: 250px;
    text-align: center;
    display: block;
    margin: 0px;
    padding: 0px:
}
.textbox{
   border-radius: 5px; 
align-items: center;
    
}
        @media{
            
            
        }
    </style>
    </head>
<body>
       <img src="springpaint1.png"  width=1345px height=650px/>
    <h1>NATIONAL INSTITUTE OF TECHNOLOGY, CALICUT-673601</h1>
    <div class="container">
      
  
<form>       
                                                          <!r can here only once put method="GET"*/!>
    <h4> MESS DUE</h4><br>
    <div class="textbox">
         NAME : <input class="textbox" type="text" name="name" action="mess1.php" method="GET" placeholder="NAME"><br><br><br>
          ROLL NO : <input class="textbox" type="text" name="rollno" action="mess1.php" method="GET" placeholder="ROLL NO" ><br><br><br>
   <input type="submit" value="LOGIN">
</form>
        </div>
    </div>
</body>
</head>