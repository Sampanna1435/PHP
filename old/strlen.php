<pre>
<?php

$greeting = "こんちは.";
//$count = mb_strlen("こんにちは");
$count = mb_strlen($greeting);

echo $count;
 echo "<hr>";
$now_time =time();


echo $now_time;

echo "<hr>";

$fruits = array("apple","lemon","banana");
sort($fruits);
var_dump ($fruits);
?>
</pre>
<hr>