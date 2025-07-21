<?php
// 連想配列の作成
$vegetable = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];

// foreachでキーと値を出力
foreach ($vegetable as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>