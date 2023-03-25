<?php

$integer = 3;
$float = 1.2;
$bollean = false;
$string = "string";
$null = null;

echo $integer;
echo "<br/>";
echo $float;
echo "<br/>";
echo $boollean;
echo "<br/>";
echo $bollean;
echo "<br/>";
echo $string;
echo "<br/>";
echo $null;
echo "<br/>";

////////////////////////////////////////////////////////////////////////////
// Conversions and operations

echo round($float);
echo "<br/>";
echo $integer + 23;
echo "<br/>";
echo $integer * $float;
echo "<br/>";
echo $float % 2;
echo "<br/>";
echo $string[0];
echo "<br/>";
echo strtoupper($string);
echo "<br/>";
echo json_encode($bollean == false);
echo "<br/>";
echo json_encode($bollean === false);
echo "<br/>";
echo var_export($bollean, true);
echo "<br/>";
echo var_dump($integer);
echo "<br/>";
echo var_dump($null);
echo "<br/>";
echo var_dump(is_null($null));
