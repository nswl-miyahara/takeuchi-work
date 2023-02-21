<?php

// クッキー：クライアント側にデータを保存するためのもの
// setcookie():ヘッダ情報と共に送信するクッキーを定義

$flag = setcookie("visited",1);

?>

<html>
    <head><title>PHP TEST</title></head>

    <body>

    <?php
    // 1回目の訪問であればクッキーを送信
    if($flag){
        print('<p>クッキーを書き込みました</p>');
    }else{
        print('<p>クッキーの書き込みに失敗しました</p>');
    }

    ?>

</body>
</html>