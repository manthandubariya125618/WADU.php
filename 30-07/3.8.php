<!-- 3.8 Write a PHP script to create a PHP script, which will store a cookie on the
client’s device to identify whether the user is a new one or a repeated one. -->
<?php

$cookie_name = "user_status";
$cookie_value = "returning_user";
$cookie_time = time() + (86400 * 30); 

if (isset($_COOKIE[$cookie_name])) {
    $message = "Welcome back! You are a repeated visitor.";
} else {
    $message = "Welcome! This is your first time visiting.";
    
    setcookie($cookie_name, $cookie_value, $cookie_time, "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Tracker</title>
</head>
<body>

    <h2><?php echo $message; ?></h2>

</body>
</html>