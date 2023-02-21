<html>
    <head><title>PHP TEST</title></head>
    <body>

    <?php
    // コンストラクタ：クラスからオブジェクトがnewによって作成されるときに自動的に呼び出されるメソッド
    // 初期化処理が必要な場合など
    // メソッドの部分に"__construct"と記述
    // クラス毎に1つしか定義できない

    $tv1 = new Television();
    print('現在のチャンネルは'.$tv1->getChannel().'<br>');
    
    class Television{
        private $channelNo;
    
        function __construct(){
            $this->channelNo = 8;
        }
    
        function getChannel(){
            return $this->channelNo;
        }
    }
    
    ?>
    </body>
    </html>