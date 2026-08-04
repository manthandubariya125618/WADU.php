<?php
session_start();

if (isset($_POST['btn'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: Home.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="btn" value="Login">
    </form>

</body>
</html>