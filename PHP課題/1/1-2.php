<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHPテスト</title>
</head>

<body>

<p>
    <?php $pref = "大田区";
    echo "東京都".$pref."<br>";
    echo "東京都{$pref}";
    ?>
    </p>

    </body>
    </html>