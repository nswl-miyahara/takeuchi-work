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
function heikin($num1 , $num2){
   $result = ($num1 + $num2) / 2;
   print $num1.'と'.$num2.'の平均は'.$result.'です<br />';
}

heikin(10,8);
heikin(3,23);
?>
</pre>

</body>
</html>