<?php
$host="localhost";
$user="root";
$password="";
$database="final";
$conn=mysqli_connect($host,$user,$password,$database);

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
echo "Connected successfully";
$db_connect=mysqli_select_db($conn,$database);
?>
