<html>
<head><title>PHP TEST</title></head>
<body>

<?php


$tv = new Television();  // オブジェクトの生成

$tv->setChannel(5);  // クラス内のメンバメソッドに渡したい値を設定

class Television{

  public $channelNo;    // メンバ変数名

// 出力結果の設定・メンバメソッド
  function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }

// 格納する値の処理・メンバメソッド
  function setChannel($channel){

    $this->channelNo = $channel;  // クラスで定義したchannelNoがchennelであることを定義

    $this->dispChannel();    // クラス内のメソッドを呼び出し
  }

}

?>
</body>
</html>