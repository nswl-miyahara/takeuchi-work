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
$maker = array('富士通','NEC','Sony','Sharp');
$type = array('Note','Desktop');
$pc = array($maker,$type);

print_r($pc);

// $pcの配列0番目の$makerの配列の１番目をとる
print '$pc[0][1] = '.$pc[0][1].'<br />';
print '$pc[1][0] = '.$pc[1][0];
?>
</pre>

</body>
</html>