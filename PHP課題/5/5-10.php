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
$pricelist = array(80,100,120);

// 変数の前に&をつけることで要素の値に対する参照を設定。新しい値を代入することで要素の値を変更できる。
foreach ($pricelist as &$value){
    $value *= 1.05;
}
// 1.05倍したものを再度格納
unset($value);

foreach ($pricelist as $value){
    print $value.'<br />';
}
?>
</p>

</body>
</html>