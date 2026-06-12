<?php

define("SEMESTER", "SEM 4 RESULT");

$name = "Manthan Dubariya";
$erNo = "92400527068";
$div = "A";

$csharp = 90;
$python = 90;
$ls2 = 90;
$os = 90;
$cn = 90;

$total = $csharp + $python + $ls2 + $os + $cn;

echo "********** " . SEMESTER . " ********** <br>";
echo "NAME : $name <br>";
echo "ER NO. : $erNo <br>";
echo "DIV : $div <br><br><pre>";

echo "SUBJECTS :                    MARKS <br>";
echo "____________________________________ <br>";
echo "C#       :                   $csharp/100 <br>";
echo "Python   :                   $python/100 <br>";
echo "LS2      :                   $ls2/100 <br>";
echo "OS       :                   $os/100 <br>";
echo "CN       :                   $cn/100 <br>";
echo "____________________________________ <br>";
echo "Total    :                  $total/500 <br>";

?>