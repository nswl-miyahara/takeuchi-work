<?php

// クッキーの読み込み
// クライアント側に保存したクッキーを読み取る

if(isset($_COOKIE["visited"])){
    // クッキーの保存がある場合は1追加
    $count = $_COOKIE["visited"] + 1;

}else{
    // クッキーの保存がない場合は初期値をクッキーに保存
    $count = 1;
}
    // クッキーの送信
$flag = setcookie("visited",$count);
?>

<html>
    <head><title>PHP TEST</title></head>
    <body>

    <?php
    print('<p>訪問回数は'.$count.'回目です</P>');
    ?>

</body>
</html>

