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
$domain = 'jp';

print 'ドメイン:'.$domain.'<br />';
if ($domain == 'in'){
  print 'インドのトップレベルドメイン';
}elseif ($domain == 'cn'){
  print '中国のトップレベルドメイン';
}elseif ($domain == 'jp'){
  print '日本のトップレベルドメイン';
}else{
  print '不明です';
}
?>
</p>

</body>
</html>