<?php

spl_autoload_register(function ($class_name) {
    include './autoloading/' . $class_name . '.php';
});

echo "<b>Autoloading:</b><br/><br/>";

$obj  = new MyClass1();
$obj2 = new MyClass2(); 

$obj->says();
echo "<br>";
$obj2->says();