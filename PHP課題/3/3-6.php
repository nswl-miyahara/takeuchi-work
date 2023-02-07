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
$num = 40;
print '$num = '.$num.'<br />';

// 25加算する
$num += 25;
print '$num = '.$num.'<br />';

$str = '福岡';
print '$str = '.$str.'<br />';

// 支店をつける
$str .= '支店';
print '$str = '.$str;
?>
</p>

</body>
</html>