<?php

// For loops

/* example 1 */
echo "<b>Example 1</b><br/>";
for ($i = 0; $i <= 9; $i++) {
    echo $i, "<br/>";
}

/* example 2 */
echo "<br/><b>Example 2</b><br/>";
for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i, "<br/>";
}

/* example 3 */
echo "<br/><b>Example 3</b><br/>";
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo $i, "<br/>";
    $i++;
}

/* example 4 */
echo "<br/><b>Example 4</b><br/>";
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

// While loops
echo "<br/><br/>";
echo "<br/><b>Example 5</b><br/>";
$i = 0;
do {
    echo $i;
} while ($i > 0);

echo "<br/><br/><b>Example 6</b><br/>";
$i = 6;
$factor = 2;
$minimum_limit = 10;
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
    echo "i is ok";

    /* process i */
} while (0);
