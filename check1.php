<pre>
<?php
$results = array(
    "Japanese" => 60,
    "English" => 70,
    "Mathematics" => 50,
    "History" => 60,
    "Chemistry" => 60,
    "Biology" => 45
);

$total = 0;
echo "<table border='10'>";

// 各教科の点数を表示
foreach ($results as $title => $score) {
    echo "<tr><td>" . $title . "</td>";
    echo "<td>";

    // 60点未満の場合は赤字にする
    if ($score < 60) {
        echo '<span style="color:red">' . $score . '</span>';
    } else {
        echo '<span style="color:black">' . $score . '</span>';
    }
    echo "</td></tr>";

    // 合計点を計算
    $total += $score;
}

// 合計点を表示
echo "<tr><td>Total</td>";
echo "<td>" . $total . "</td></tr>";
echo "</table>";
?>
</pre>
