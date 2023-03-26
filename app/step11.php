<?php

namespace fub;

include './namespaces/file1.php';
include './namespaces/file2.php';
include './namespaces/file3.php';

use foo as feline;
use bar as canine;
use animate;

echo "<b>Namespaces</b><br/><br/>";
echo feline\Cat::says(), "<br />\n";
echo canine\Dog::says(), "<br />\n";
echo \animate\Animal::breathes(), "<br />\n";
