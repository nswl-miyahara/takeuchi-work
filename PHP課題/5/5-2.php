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
$i = 0;

// 外側の処理１回につき内側の処理が３回実施される・最初の出力は必ず０
while ($i < 3){
  $j = 0;

  while ($j < 3){
    print '(i, j)=('.$i.','.$j.')<br />';
    $j += 1;
  }
  $i += 1;
}
?>
</p>

</body>
</html>