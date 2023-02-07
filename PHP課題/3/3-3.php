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
$var = '高橋';
print '[値]'.$var.',';
// gettype関数は引数の値や変数の型を調べる
print '[型]'.gettype($var).'<br />';  

$var = 180;
print '[値]'.$var.',';
print '[値]'.gettype($var)
?>
</p>

</body>
</html>