<?php // open tag

echo "Hello world!"; // explain everything about this statement

// a // mistake explain about syntax eror
// echo 12 / 0; // exlpain about Fatal error

// долар, крапка з комою, відступи
// echo
// print
echo "<br/>";
echo "<br/>";

print("I am print");

$a = "1";
$b = 0;
$c = true;
$d = 0.0;

define("FOO", "something");

echo "<br/><br/><br/>";
echo FOO;
echo "<br/><br/>";
// Коментарі
/* 
Hello
*/

// Різниця між кавичками
// https://stackoverflow.com/questions/3446216/what-is-the-difference-between-single-quoted-and-double-quoted-strings-in-php

$name = "PHP";

echo "<br/>Hello ${name}<br/>";
echo "<br/>Hello {$name}<br/>";
echo "<br/>Hello $name<br/>";
echo "<br/><br/>";
echo 'ebd $name';

$string = 'He said "What\'s up?"';
$string = "He said \"What's up?\"";

echo "<br/><br/><br/>";

// Heredoc
// https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
echo <<<END
      a
     b
    c
\n
END;

echo "<br/><br/><br/>";

// Nowdoc
// https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc
echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;

// close tag 
