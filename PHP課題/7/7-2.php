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
function check($kamoku, $tensuu){
    print $kamoku.'の結果：';
    if ($tensuu > 75){
        print '合格です';
    }else{
        print '不合格です';
    }
    print '(点数：'.$tensuu.')';
    print '<br />';
}

$sugaku = 84;
$eigo = 62;
$kokugo = 78;

check('数学',$sugaku);
check('英語',$eigo);
check('国語',$kokugo);

?>
</pre>

</body>
</html>