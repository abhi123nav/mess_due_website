<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
$db=mysqli_connect($host,$user,$password,$dbname);
mysqli_select_db='databasename';
if(mysqli_connect($host,$user,$password))
{echo "1";
}