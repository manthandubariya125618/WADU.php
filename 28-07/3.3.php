<!-- 3.3 Write a PHP script to use cookie with header.  -->

<?php
header("Set-Cookie: user=John; expires=" . gmdate("D, d M Y H:i:s", time() + 3600) . "; path=/");

if (isset($_COOKIE['user'])) {
    echo "Welcome back, " . $_COOKIE['user'] . "!";
} else {
    echo "Cookie has been set. Please refresh the page.";
}
?>