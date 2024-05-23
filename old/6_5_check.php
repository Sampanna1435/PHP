<pre>
<?php

// 配列の要素 果物, 野菜
// 果物, 野菜も配列

// 一度に作るのが難しい場合は、
// 1. まず　果物の配列をつくる, 野菜の配列を作る
// 2. 果物の配列と野菜の配列を要素にする配列を作る

$fruits = array("イチゴ","リンゴ","バナナ");
$vegetables = array("きゅうり","かぼちゃ","ジャガイモ");

$foods = array(
    "果物" => $fruits,
    "野菜" => $vegetables
);
//var_dump($foods);

foreach ($foods as $title => $food) {
    //var_dump($food);
    // array("イチゴ","リンゴ","バナナ");
    // array("きゅうり","かぼちゃ","ジャガイモ");
    // ↑がじゅんに出てくる
    echo $title;
    echo "<br>";
    foreach ($food as $item) {
        echo $item;
        // ↑array("イチゴ","リンゴ","バナナ")の中の各要素
        echo "<br>";
    }
    echo "<br>";
}
?>
</pre>