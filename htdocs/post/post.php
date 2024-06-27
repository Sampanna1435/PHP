<?php
$name = $_POST['name'];

$gender_raw = $_POST['gender'];
if ($gender_raw == "man") {
    $gender = "男性";
} else if ($gender_raw == "woman") {
    $gender = "女性";
} else {
    $gender = "不正な値です";
}

// できた人は1〜5の数字であるかをチェックする p195
$star_raw = intval($_POST['star']);
//         intvalは、整数にする関数
//         整数でない場合は0になる
if ($star_raw < 1 || $star_raw > 5) {
    $star = '不正な値です';
} else {   
    $star = '';
    for($i=0;$i<5;$i++) { // 星を5こ表示する
        if ($i < $star_raw) {
            $star .= '★'; // 点数分の ★
        } else {
            $star .= '☆'; // 残りは ☆
        }
    }
}
$other = $_POST['other'];


echo $name;
echo "<hr>";
echo $gender;
echo "<hr>";
echo $star;
echo "<hr>";
echo $other;
echo "<hr>";

// p196 check test
// Q1 ファイル、画像、動画 (GETだと大きいデータ送れない)
// Q2 <form>
// Q3
//   1   <input type="text" name="title">
//   2   <select>
//          <option name="fruit" value="banana">バナナ</option>
//          <option name="fruit" value="apple">バナナ</option>
//          <option name="fruit" value="orange">バナナ</option>
//       </select>
//   3   <input type="radio" name="gender" value="male">男性
//       <input type="radio" name="gender" value="female">女性


// 教科書の☆の出し方
for ($i = 0; $i < $tmp_star; $i++){
    $star .= '★'; // 送信された評価の数だけ★を追加
}
//  ⇩forの最初に $i=0を書かない。$iの値は↑のforの続き。
//  上下のforで合わせて5回のループ処理
for (; $i < 5; $i++){
    $star .= '☆'; // 「5-送信された数字」の分だけ☆を追加
}