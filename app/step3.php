<?php

// https://www.w3schools.com/php/php_operators.asp

echo "<b>PHP Increment / Decrement Operators</b>";
echo "<br/>";
$a = 1;
echo $a++;
echo "<br/>";
echo $a;
echo "<br/>"; 
echo $a *= 2;
echo "<br/>";
echo "<br/>";

echo "<b>PHP Arithmetic Operators</b>";
echo "<br/>";
echo 10 + 2;
echo "<br/>";

echo 10 - 2;
echo "<br/>";

echo 10 / 2;
echo "<br/>";

echo 10 * 2;
echo "<br/>";

echo 10 % 4;
echo "<br/>";
echo "<br/>";

echo "<b>PHP Logical Operators</b>";
echo "<br/>";
echo var_dump(true and true);
echo "<br/>";
echo "<br/>";

echo "<b>PHP Comparison Operators</b>";
echo "<br/>";

/*
The <=> ("Spaceship") operator will offer combined comparison in that it will :
Return 0 if values on either side are equal
Return 1 if the value on the left is greater
Return -1 if the value on the right is greater
 */

//Comparing Integers
echo 1 <=> 1; //output  0
echo "<br/>";
echo 3 <=> 4; //output -1
echo "<br/>";
echo 4 <=> 3; //output  1
echo "<br/>";
echo "<br/>";

//String Comparison
echo "x" <=> "x"; //output  0
echo "<br/>";
echo "x" <=> "y"; //output -1
echo "<br/>";
echo "y" <=> "x"; //output  1
echo "<br/>";
