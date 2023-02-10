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
for ($i = 0, $j = 3; $i < 3; $i++, $j--){
  print 'i = '.$i.',j = '.$j.'<br />';
}
?>
</p>

</body>
</html>