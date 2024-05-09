<pre>
<?php
//p118 6-10
$results = array (
    "math"=>90,
    "english"=>80,
    "japanese"=>85,
    "history"=>75
);
//foreach
foreach($results as $score) {
    echo $score. "<br>";
}


?>
</pre>
<hr>
<pre>
<?php
foreach ($results as $title => $score) {
    echo $title . ":". $score . "<br>";
}

?>
</pre>
<hr>