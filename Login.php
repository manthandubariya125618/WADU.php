<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Student Login</h1>
    <form method="post">
        User Name : <input type="text" name="username"><br><br>
        password : <input type="password" name="password"><br><br>
         <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
     if($_SERVER["REQUEST_METHOD"]=='POST')
     {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "manthan" && $password == "12345")
        {
            header("Location: welcome.php");
        }
        else{
            echo "invalid username or password";
        }
     }
?>