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
$num1 = 320;
$num2 = $num1;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

$num1 = 18;

print '$nnum1 ='.$num1.'<br />';
print '$num2 ='.$num2; 
?>
</p>

</body>
</html>