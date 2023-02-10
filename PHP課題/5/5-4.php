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
$count1 = 0;
$sum = 0;

while ($count1 < 10){    // continueが実行された時に処理が移る位置
  $count1 += 1;

  $count2 = 0;
  while ($count2 < 10){
    $count2 += 1;
    if ($count1 * $count2 > 30){
      continue 2;
    }

    $sum += $count1 * $count2;
  }
}
print 'sum = '.$sum;
?>
</p>

</body>
</html>