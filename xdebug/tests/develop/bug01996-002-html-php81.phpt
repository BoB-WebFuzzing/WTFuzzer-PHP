--TEST--
Test for bug #1996: Show wrapped callable for first class callables (PHP 8.1, html)
--SKIPIF--
<?php
require __DIR__ . '/../utils.inc';
check_reqs('PHP >= 8.1,< 8.2');
?>
--INI--
xdebug.mode=develop
html_errors=1
xdebug.cli_color=2
--FILE--
<?php
$closure = substr(...);
var_dump($closure);


function user_defined($a, $b)
{
	return substr($a, $b);
}
$closure = user_defined(...);
var_dump($closure);


$closure = DateTimeImmutable::createFromFormat(...);
var_dump($closure);


$dateTime = new DateTimeImmutable("2021-07-22");
$closure = $dateTime->format(...);
var_dump($closure);
?>
--EXPECTF--
<pre class='xdebug-var-dump' dir='ltr'>
<small>%sbug01996-002-html-php81.php:3:</small>
<b>object</b>(<i>Closure</i>)[<i>1</i>]
  <i>virtual</i> 'closure' <font color='#cc0000'>'substr'</font>
  <i>public</i> 'parameter' <font color='#888a85'>=&gt;</font> 
    <b>array</b> <i>(size=3)</i>
      '$string' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;required&gt;'</font> <i>(length=10)</i>
      '$offset' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;required&gt;'</font> <i>(length=10)</i>
      '$length' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;optional&gt;'</font> <i>(length=10)</i>
</pre><pre class='xdebug-var-dump' dir='ltr'>
<small>%sbug01996-002-html-php81.php:11:</small>
<b>object</b>(<i>Closure</i>)[<i>2</i>]
  <i>virtual</i> 'closure' <font color='#cc0000'>'user_defined'</font>
  <i>public</i> 'parameter' <font color='#888a85'>=&gt;</font> 
    <b>array</b> <i>(size=2)</i>
      '$a' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;required&gt;'</font> <i>(length=10)</i>
      '$b' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;required&gt;'</font> <i>(length=10)</i>
</pre><pre class='xdebug-var-dump' dir='ltr'>
<small>%sbug01996-002-html-php81.php:15:</small>
<b>object</b>(<i>Closure</i>)[<i>1</i>]
  <i>virtual</i> 'closure' <font color='#cc0000'>'DateTimeImmutable::createFromFormat'</font>
  <i>public</i> 'parameter' <font color='#888a85'>=&gt;</font> 
    <b>array</b> <i>(size=3)</i>
      '$format' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;required&gt;'</font> <i>(length=10)</i>
      '$datetime' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;required&gt;'</font> <i>(length=10)</i>
      '$timezone' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;optional&gt;'</font> <i>(length=10)</i>
</pre><pre class='xdebug-var-dump' dir='ltr'>
<small>%sbug01996-002-html-php81.php:20:</small>
<b>object</b>(<i>Closure</i>)[<i>3</i>]
  <i>virtual</i> 'closure' <font color='#cc0000'>'$this->format'</font>
  <i>public</i> 'this' <font color='#888a85'>=&gt;</font> 
    <b>object</b>(<i>DateTimeImmutable</i>)[<i>2</i>]
      <i>public</i> 'date' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'2021-07-22 00:00:00.000000'</font> <i>(length=26)</i>
      <i>public</i> 'timezone_type' <font color='#888a85'>=&gt;</font> <small>int</small> <font color='#4e9a06'>3</font>
      <i>public</i> 'timezone' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'UTC'</font> <i>(length=3)</i>
  <i>public</i> 'parameter' <font color='#888a85'>=&gt;</font> 
    <b>array</b> <i>(size=1)</i>
      '$format' <font color='#888a85'>=&gt;</font> <small>string</small> <font color='#cc0000'>'&lt;required&gt;'</font> <i>(length=10)</i>
</pre>
