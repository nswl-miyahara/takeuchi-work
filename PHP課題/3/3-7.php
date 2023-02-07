<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<p>
<?php
// 定数の定義（使いまわせる）
define("PAI", 3.14159);

$r = 7;
$menseki = PAI * $r * $r;
print '半径='.$r.'の面積は'.$menseki.'<br />';

$r = 14;
$menseki = PAI * $r * $r;
print '半径='.$r.'の面積は'.$menseki;
?>
</p>

</body>
</html>