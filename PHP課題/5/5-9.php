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
$preflist = array('Tokyo' => '東京', 'Osaka' => '大阪');

foreach ($preflist as $key => $value){
    print $key.'=>'.$value.'<br />';
}
?>
</p>

</body>
</html>