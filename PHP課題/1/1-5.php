<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHPテスト</title>
</head>

<body>

<p>
    <?php
    $name = "高橋";
    // ""の場合は変数展開可能。''は文字列としてそのまま出力
    // ｛｝を使わないときは、変数の後ろに空白をつける
    echo "私の名前は{$name}です<br>";
    echo "私の名前は$name です<br>";
    echo '私の名前は{$name}です';
?>
</p>
</body>
</html>