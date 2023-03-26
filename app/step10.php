<?php

// There are require and include_once as well.

// 1) When should I use require vs. include?
// 2) When should I use require_once vs. require

// The answer to 1 is described here.
// The require() function is identical to include(), except that it handles errors differently. If an error occurs, the include() function generates a warning, but the script will continue execution. The require() generates a fatal error, and the script will stop.

// The answer to 2 can be found here.
// The require_once() statement is identical to require() except PHP will check if the file has already been included, and if so, not include (require) it again.

echo "<br/><b>Included vs required</b> <br/><br/>";

include "./libs/functions.php";
echo "<br/>";
require "./libs/consts.php";
require "./libs/consts.php";

// Once
echo "<br/>";
require_once "./libs/config.php";
require_once "./libs/config.php";

echo "<br/>";
include_once "./libs/env.php";
include_once "./libs/env.php";

echo "<br/>";
echo random();
