<?php

$str = "Hello PHP";

echo "Length = " . strlen($str);
echo "<br>";

echo "Position of PHP = " . strpos($str, "PHP");
echo "<br>";

echo "Word Count = " . str_word_count($str);
echo "<br>";

echo "Reverse = " . strrev($str);
echo "<br>";

echo "Lowercase = " . strtolower($str);
echo "<br>";

echo "Uppercase = " . strtoupper($str);

?>