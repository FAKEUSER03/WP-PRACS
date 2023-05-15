<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="post">
    <h1>Inserting data</h1>
        <div>
            Username: <input type="text" name="uname" id="name">
        </div>
        <div>
            Password: <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Submit">  
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        include "connection.php";
    
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        // echo "Your name is ".$uname;
        echo "Registration Done<br>";
        $sql="INSERT INTO `user`(`Username`,`password`) values ('$uname','$password')";
    
        mysqli_query($conn,$sql);
    }

?>
</body>
</html>