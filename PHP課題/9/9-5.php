<html>
    <head><title>PHP TEST</title></head>
    <body>

    <?php
    $tv = new Television();

    $tv->setChannel(20);
    print('現在のチャンネルは'.$tv->getChannel().'<br>');

    $tv->setChannel(10);
    print('現在のチャンネルは'.$tv->getChannel().'<br>');

    class Television{
        private $channelNo = 8;

        // クラス内で固定の定数を定義
        const MAX_CHANNEL = 12;
        const MIX_CHANNEL = 1;
        const ERROR_MSG = 'チャンネルは1から12の間で設定してください<br>';

        function setChannel($channel){
            // クラス内で定数を参照
            if(($channel >= self::MIX_CHANNEL) and
               ($channel <= self::MAX_CHANNEL)){

                $this->channelNo = $channel;
               }else{
                print(self::ERROR_MSG);
               }
        }

        function getChannel(){
            return $this->channelNo;
        }
    }

    ?>
    </body>
    </html>