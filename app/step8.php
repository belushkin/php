<?php

setcookie("TestCookie", 1);
session_start();
$_SESSION["newsession"] = 2;

// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV

// GLOBALS
echo "<b>GLOBALS</b><br/>";
function test()
{
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br/>";
    echo '$foo in current scope: ' . $foo . "<br/>";
}

$foo = "Example content";
test();

// SERVER
echo "<br/><b>SERVER</b><br/>";
echo "<pre>";
print_r($_SERVER);


// GET
echo "<br/><b>GET</b><br/>";
echo "<pre>";
?>
<a href="/step8.php?test=a">GET link</a>
<?php
print_r($_GET);

// POST
echo "<br/><b>POST</b><br/>";
?>
<form action="/step8.php" method="POST" enctype="multipart/form-data">
    <input type="text" id="input" name="input"><br>
    <input type="file" id="myFile" name="filename">
    <input type="submit" value="Submit">
</form>
<?php
echo "<pre>";
print_r($_POST);

// FILES
echo "<br/><b>FILES</b><br/>";
echo "<pre>";
print_r($_FILES);

// SERVER
echo "<br/><b>COOKIE</b><br/>";
echo "<pre>";
print_r($_COOKIE);

// SESSION
echo "<br/><b>SESSION</b><br/>";
echo "<pre>";
print_r($_SESSION);

// REQUEST
echo "<br/><b>REQUEST</b><br/>";
echo "<pre>";
print_r($_REQUEST);

// ENV
echo "<br/><b>ENV</b><br/>";
echo "<pre>";
print_r($_ENV);
