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
$count = 1;
$sum = 0;

while ($count <= 100){
  $sum += $count;

  if ($sum > 1000){
    print '1000を越えたので count = '.$count.' で終了します<br />';
    break;
  }

  $count += 1;
}
print 'sum = '.$sum;
?>
</p>

</body>
</html>