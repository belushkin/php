<?php

// example 1 (A simple array)
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// example 2
// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

// example 3 (Type Casting and Overwriting example)
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);

echo "<b>Array 1</b><br/>";
var_dump($array);

// Example 4 (Mixed int and string keys)
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
echo "<br/><br/><b>Array 2</b><br/>";
var_dump($array);


// Example 5 (Indexed arrays without key)
$array = array("foo", "bar", "hello", "world");
echo "<br/><br/><b>Array 3</b><br/>";
var_dump($array);

// Example 6 (Keys not on all elements)
$array = array(
    "a",
    "b",
    6 => "c",
    "d",
);
echo "<br/><br/><b>Array 4</b><br/>";
var_dump($array);

// Example 7 (Complex Type Casting and Overwriting example)
$array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

echo "<br/><b>Array 5</b><br/>";
var_dump($array);

// Example 8
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

echo "<br/><br/><b>Array 6</b><br/>";
var_dump($array["foo"]);
echo "<br/>";
var_dump($array[42]);
echo "<br/>";
var_dump($array["multi"]["dimensional"]["array"]);
