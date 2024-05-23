<pre>
<?php
function vending_machine ($price,$juice) {
    if($price >= 120){
        $message = $juice . "を入しました<br>";
    }else{
        $message = $juice . "を入できません<br>";
    }
    return $messange;

    echo vending_machine(120,"オレンジジュース");
    echo vending_machine(100,"りんごジュース");
}
     ?>
</pre>
<hr>