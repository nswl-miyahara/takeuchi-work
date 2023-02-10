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
$preflist = array('東京','大阪','名古屋');

foreach ($preflist as $pref){
    print $pref.'<br />';
}
?>
</p>

</body>
</html>