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
$result[0] = 85;
$result[1] = 92;
$result[2] = 68;

for ($i = 0; $i < 3; $i++){
    print $result[$i].'<br />';
}
?>
</p>

</body>
</html>