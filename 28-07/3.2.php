<!-- 3.2 Write a PHP script to read the cookie of a form.  -->
<?php
if (isset($_POST['username'])) {
    setcookie("user", $_POST['username'], time() + 3600);
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Enter name" required>
    <button type="submit">Save</button>
</form>

<?php
if (isset($_COOKIE['user'])) {
    echo "Cookie Value: " . $_COOKIE['user'];
} else {
    echo "No cookie set yet.";
}
?>