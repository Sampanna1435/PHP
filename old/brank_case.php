<?php
$i = "Yes";
switch($i) {
    case "はい":
    case"Yes":
        echo "okです";
        break;

    case "いいえ":
        case "no":
        echo "no";
        break;

    }

?>
<hr>
<?php
// do whileは一回は必ず実行される
$j = 100;
do {
    echo  "買います<br>"; // 出力する
    $j = $j - 150;// 150引く
    echo "残金" . $j . "円です<br>";
} while ($j>=150);


?>
<hr>
<?php
$j =100;
do {
    echo "買います";
    $j = $j - 150;
    echo "金" . $j . "円です<br>";
}while($j>=150);

?>
<?php
// p99 check test
// Q1
// breakは処理終了

// Q2
// defaultは、どの条件にも当てはまらない場合に実行

// Q3
echo "<hr>";
echo "forで実行<br>";
for ($i=10;$i>=1;$i--) {
    echo $i . "<br>";
}
echo "<hr>";
echo "whileで実行<br>";
$i=10;
while ($i>=1) {
    echo $i . "<br>";
    $i--;
}

//Q4
$i = 2;
while ($i < 2) {
    echo "whileループ";
    $i++;
}
echo "whileループを抜けました";

//Q5
$total = 10;
switch ($total) {
    case 10:
        echo "10";
        break;
    case 20:
        echo "20";
        break;
    default:
        echo "その他";
}
?>