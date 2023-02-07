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
$old = 25;
$pref = '東京';

if ($old >= 20 && $pref == '東京'){
  print "東京出身で20歳以上です";
}
?>
</p>

</body>
</html>