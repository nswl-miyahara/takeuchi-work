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
// 整数が浮動小数点数に変換
echo "5 + 2.4 = ", 5 + 2.4, '<br />';
// 文字列の先頭の数値はその数値で計算
echo "5 + '8year' = ", 5 + '8year', '<br />';
// 単なる文字列は０で計算
echo "5 + '東京' = ", 5 + '東京';
?>
</p>

</body>
</html>