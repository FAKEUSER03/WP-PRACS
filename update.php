<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form action="update.php" method="post">
    <h1>Updating data</h1>
        <div>
            Username: <input type="text" name="uname" id="name">
        </div>
        <div>
            New Password: <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Submit">  
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        include "connection.php";
    
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        // echo "Your name is ".$uname;
        $sql = "UPDATE `user` SET password = '$password' WHERE username='$uname'";

        if ($conn->query($sql) === TRUE) {
            echo "Value updated successfully!";
        } else {
            echo "Error updating value: " . $conn->error;
    }
    
        mysqli_query($conn,$sql);
    }

?>
</body>
</html>