<!-- 3.7 Write a PHP script to create a session when the user log in using
the form, Provide an option to logout. Once the user logs out then

he/she should not be able to open the home page using the URL.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php
     session_start();

     if(!isset($_SESSION['username'])){
        header("Location: Login.php");
     }
 ?>

    <h1>
        <?="Welcome to home page ".$_SESSION['username']?>
    </h1>
    <a href="Logout.php">Logout</a>
</body>
</html>
