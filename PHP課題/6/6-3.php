<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPテスト</title>
</head>
<body>

<p>PHPのテストです。</p>

<pre>
<?php
$key = 'peach';
$var["price_$key"] = 120;

define("ORANGE",'price_orange');
$var[ORANGE] = 86;

print_r($var);
?>
</pre>

</body>
</html>