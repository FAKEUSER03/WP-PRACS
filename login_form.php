<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin:10px;
        }
    </style>
</head>
<body>
    <center>
    <form action="login_p.php" method="POST">
        <h1>Login Form</h1>
        <div>
            Username: <input type="text" name="uname" id="name">
        </div>
        <div>
            Password: <input type="password" name="password" id="password">
        </div>
        <br>
        Don't have account <a href="register.php">register</a>
        <br><br>
        <input type="submit" value="Submit">   
        
        
    </form>
</center>
</body>
</html>