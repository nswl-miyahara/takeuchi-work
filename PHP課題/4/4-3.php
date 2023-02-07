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
$var1 = 208;
if ($var1 == 208){
  print "変数の値は208と等しい<br />";
}

$var1 = 12;
$var2 = '12';
if ($var1 == $var2){
  print "12 == '12'はTRUEです<br />";
}

$var1 = 'Tokyo';
if ($var1 == 'Tokyo'){
  print "変数の値はTokyoと等しい";
}
?>
</p>

</body>
</html>