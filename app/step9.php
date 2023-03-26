<?php

// date(format,timestamp)

// format	    Required.   Specifies the format of the timestamp
// timestamp	Optional.   Specifies a timestamp. Default is the current date and time

echo "<b>Date and time</b> <br/><br/>";

// Date
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

?>
<br /><br />
&copy; 2010-<?php echo date("Y"); ?><br /><br />
<?php

// Time
echo "The time is " . date("h:i:sa") . "<br/>";

// Time zone
date_default_timezone_set("America/New_York");
echo "<br/>The time in New Your is " . date("h:i:sa") . "<br/>";

// mktime(hour, minute, second, month, day, year)

$d = mktime(11, 14, 54, 8, 12, 2014);
echo "<br/>Created date with mktime is " . date("Y-m-d h:i:sa", $d) . "<br/>";

// strtotime(time, now)
$d = strtotime("10:30pm April 15 2014");
echo "<br/>Created date with strtotime is " . date("Y-m-d h:i:sa", $d) . "<br/><br/>";

$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br><br/>";


// The example below outputs the dates for the next six Saturdays:
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

echo "<br/>";
// The example below outputs the number of days until 4th of July:
$d1 = strtotime("July 04");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
echo "There are " . $d2 . " days until 4th of July.";
