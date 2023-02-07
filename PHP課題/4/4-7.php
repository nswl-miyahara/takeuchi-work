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
$domain = 'cn';

print 'ドメイン:'.$domain.'<br />';

switch ($domain){
case 'in':
  print 'インドのトップレベルドメイン';
  break;
case 'cn':
  print '中国のトップレベルドメイン';
  break;
case 'jp':
  print '日本のトップレベルドメイン';
  break;
default:
  print '不明です';
}
?>
</p>

</body>
</html>