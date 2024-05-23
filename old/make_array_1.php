<pre>
<?php
$friends = array ("はるき","かおる","ひでと");
var_dump($friends);
?>
<hr>

<?php
//$friends = array ("はるき","かおる","ひでと");
$friends =  ["はるき","かおる","ひでと"];
var_dump($friends);
?>
<hr>
<?php
echo"0番目:" .$friends[0]."<br>";
echo"1番目:" .$friends[1]."<br>";
echo"2番目:" .$friends[2]."<br>";
?>
<hr>
<?php
$friends[] =  "はるき";
var_dump($friends);
echo"3番目:" .$friends[3]."<br>";
?>
</pre>