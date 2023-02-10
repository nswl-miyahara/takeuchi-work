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
$num = 0;

while ($num < 3){
  print 'num = '.$num.'<br />';
  $num += 1;
}
?>
</p>

</body>
</html>