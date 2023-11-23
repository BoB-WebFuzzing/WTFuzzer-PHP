--TEST--
Test strftime() function : usage variation - Checking newline and tab formats which was not supported on Windows before VC14.
--FILE--
<?php
/* Prototype  : string strftime(string format [, int timestamp])
 * Description: Format a local time/date according to locale settings
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing strftime() : usage variation ***\n";

// Initialise function arguments not being substituted (if any)
setlocale(LC_ALL, "en_US");
date_default_timezone_set("Asia/Calcutta");
$timestamp = mktime(8, 8, 8, 8, 8, 2008);

//array of values to iterate over
$inputs = array(
	  'Newline character' => "%n",
	  'Tab character' => "%t"
);

// loop through each element of the array for timestamp

foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
	  var_dump( strftime($value) );
	  var_dump( strftime($value, $timestamp) );
}

?>
===DONE===
--EXPECT--
*** Testing strftime() : usage variation ***

--Newline character--
string(1) "
"
string(1) "
"

--Tab character--
string(1) "	"
string(1) "	"
===DONE===
