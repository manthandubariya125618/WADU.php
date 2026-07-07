<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<form method="post">
    Number 1: <input type="number" name="n1" required><br><br>
    Number 2: <input type="number" name="n2" required><br><br>

    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="submit" value="Calculate">
</form>

<?php
function calculator($a, $b, $op)
{
    if ($op == "+")
        return $a + $b;
    elseif ($op == "-")
        return $a - $b;
    elseif ($op == "*")
        return $a * $b;
    elseif ($op == "/")
        return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];

    echo "<h3>Result = " . calculator($n1, $n2, $op) . "</h3>";
}
?>

</body>
</html>