<?php
// 認証ダイアログ
$user = 'admin';
$password = 'pass';

if(!isset($_SERVER['PHP_AUTH_USER'])){

    // header関数：HTTPヘッダをクライアントへ送信するための関数
    header('WWW-Authenticate: basic realm="Private Page"');
    header('HTTP/1.0 401 Unauthorized');

    // キャンセルを押したとき
    die('このページを見るにはログインが必要です');
}else{
    // ログイン情報が誤っているとき
    if($_SERVER['PHP_AUTH_USER'] != $user
       || $_SERVER['PHP_AUTH_PW'] != $password){

        header('WWW-Authenticate: Basic realm="Private Page"');
        header('HTTP/1.0 401 Unauthorized');
        die('このページを見るにはログインが必要です');
       }
}

?>
<!-- ログイン情報があっていれば表示 -->
<html>
    <head><title>PHP TEST</title></head>
    <body>

    <p>ようこそ、会員向けページ</p>

</body>
</html>