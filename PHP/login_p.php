<?php
include "connection.php";

$uname=$_POST['uname'];
$password=$_POST['password'];
$sql="SELECT password from user where username='$uname'";

$pass1=$conn->query($sql)->fetch_assoc();
// echo "<br> ".$pass1."<br> ";
if(!($pass1["password"]==$password)){

    echo "username or Password is incorrect";
}
else{
    echo "<h3>Logged in Successfully </h3>";
    
}

mysqli_close($conn);
?>