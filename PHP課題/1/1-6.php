<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPテスト</title>
</head>
<body>

<pre>
<?php
// <<<の後はID名を指定。終端IDがヒアドキュメントの先頭位置になる
// 複数の文字列を並べるときに便利
echo <<<LABEL
こんにちは。
私の名前は本田です。
また会いましょう。
LABEL;
?>
</pre>

</body>
</html>