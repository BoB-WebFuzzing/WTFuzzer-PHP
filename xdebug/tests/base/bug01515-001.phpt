--TEST--
Test for bug #1515: Object property names with a NULL char are cut off at NULL char (var_dump)
--INI--
html_errors=0
xdebug.mode=develop
xdebug.cli_color=0
--FILE--
<?php
include dirname(__FILE__) . '/bug01515.inc';

ini_set('html_errors', 1);
var_dump($obj);

ini_set('html_errors', 0);
var_dump($obj);

ini_set('xdebug.cli_color', 2);
var_dump($obj);
?>
--EXPECTF--
We're here
<pre class='xdebug-var-dump' dir='ltr'>
<small>%sbug01515-001.php:5:</small>
<b>object</b>(<i>stdClass</i>)[<i>1</i>]
  <i>public</i> 'with_ _null_char' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>42</font>
</pre>%sbug01515-001.php:8:
class stdClass#1 (1) {
  public $with_ _null_char =>
  int(42)
}
[1m%sbug01515-001.php[22m:[1m11[22m:
[1mclass[22m [31mstdClass[0m#1 ([32m1[0m) {
  [32m[1mpublic[22m[0m $with_ _null_char [0m=>[0m
  [1mint[22m([32m42[0m)
}
