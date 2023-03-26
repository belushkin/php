<?php

$a = true;

// If/else

if ($a) {
    echo "I am a";
}

echo "<br/><br/>";

if ($a) {
    echo "I am a 2";
} else {
    echo "I am not a 2";
}

echo "<br/><br/>";

if ($a) {
    echo "I am a 3";
} else if ($a == 2) {
    echo "I am not a 3";
} else {
    echo "I am 2";
}

// Switch
// https://www.php.net/manual/en/control-structures.switch.php

$i = 2;

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
}
