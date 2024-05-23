<pre>
<?php
$true = TRUE;
$false = FALSE;
$a = $true && $true;
$b = $true && $false;
$c = $true && $true &&true;

$d = $true && $false && $false;
$e= $true && ($true&& $false);
$f =$false && $false;

var_dump($a,$b,$c,$d,$e);
?>

↓or
</pre>

<pre>
<?php
$true = TRUE;
$false = FALSE;
$a = $true || $true;
$b = $true || $false;
$c = $true || $true ||$true;

$d = $true || $false || $false;
$e= $true || ($true || $false);
$f =$false || $false;

var_dump($a,$b,$c,$d,$e);

?>

↓not
</pre>

<pre>
<?php
$true = TRUE;
$false = FALSE;

$a = !$true;
$b = !$false ;
$c = !$true && !$true;
///false
$d = !($true && $false );
var_dump($a,$b,$c,$d);

?>
</pre>

<pre>
p74 check test
    <?php
$true = TRUE;
$false = FALSE;

$a = $true && $true;
$b = $true && $false;
$c = $true || $false;
$d = $true || $false;
$e = !$true;
$f = !$false ;
$g = !($true && $false );
$h = !($true && $false ) $false;

var_dump($a,$b,$c,$d,$e,$f,$g,$h);
    ?>
</pre>