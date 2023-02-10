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

// オブジェクトの生成
$tv = new Television();
$tv->channelNo = 8;
$tv->dispChannel();

class Television{
    public $channelNo; 
                                // クラス内でメンバ変数にアクセス     
    function dispChannel(){    
        print('現在のチャンネルは'.$this->channelNo);
    }
}

?>
</pre>

</body>
</html>