
<pre>
<?php
function get_price($price){
    $price = $price*1.1;
    return round ($price);
}

echo get_price(300);
echo "<br>";
echo get_price(1000);
echo "<br>";
echo get_price(3);
echo "<br>";
echo get_price(5);
echo "<br>";
echo get_price(10003);
echo "<br>";
?>
</pre>
<hr>
<pre>
<?php
function taxratio(){
    return"10%";
}
echo taxratio();
echo "<br>";
function default_demo($name = "サム"){
    echo "私の名前は" . $name . "です<br>";
    }
    default_demo("スベディ");

     default_demo();

     //get_price();
     ?>
</pre>