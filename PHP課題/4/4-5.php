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
$old = 18;

print '年齢:'.$old.'<br />';
if ($old >= 20){
  print '年齢は20才以上です<br />';
}else{
  print '年齢は20才未満です<br />';
}

$old = 45;

print '年齢:'.$old.'<br />';
if ($old >= 20){
  print '年齢は20才以上です';
}else{
  print '年齢は20才未満です';
}
?>
</p>

</body>
</html>