<?php
// p182 10-1
//      ⇩GETパラメータをとってくる
$page = $_GET['page'];
echo $page;

// http://localhost:8888/tennis/get.php?page=2　のように
// ?page= をつけてアクセスする

// ひとまずエラー処理は省く