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
// num1もnum2も320となる。320が格納された変数が複数あるイメージ
$num1 = 320;
$num2 =& $num1;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

// 一方の値が変わっても同時に変わる
$num1 = 18;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

$num2 = 75;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2;
?>
</p>

</body>
</html>