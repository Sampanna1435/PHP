<?php
// p184 10-2
// $_GET　は連想配列なので、foreachでループ処理すると、
// 個別の要素を取ってくることが可能
foreach ($_GET as $key => $value) {
    // foreachは教科書p118
    echo 'キー:' . $key . '<br>';
    echo '値:' . $value . '<br><br>';
}

// http://localhost:8888/tennis/get-multi.php?page=2　のように
// http://localhost:8888/tennis/get-multi.php?page=2&tag=abc
//   ↑　GETパラメータが複数の時は ?XXX=1&YYY=2&ZZZ=3 のように、&で繋ぐ

// p185 check testをやってみる
// Q1 A パラメータ  B 値
// Q2 
//   変数名 name 値 sasaki
//   変数名 age  値 25
