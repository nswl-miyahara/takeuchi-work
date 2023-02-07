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
$lang = 'En';

// 三項演算子
// langがJpと等しいかどうかを判定
// true：こんにちは、false：Helloをmsgに格納
$msg = $lang == 'Jp'  ? 'こんにちは' : 'Hello';
print $msg.'<br />';

$lang = 'Jp';

print $lang == 'Jp'  ? 'こんにちは' : 'Hello';
?>
</p>

</body>
</html>