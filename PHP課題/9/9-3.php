<html>
<head><title>PHP TEST</title></head>
<body>


<!-- public: クラス内、クラス外のどこからでもアクセス可能 -->
<!-- private: 同じクラス内からのみアクセス可能 -->
<!-- protected: 同じクラス、および子クラスからアクセス可能 -->

<?php

$tv = new Television();
$tv->channelNo = 5;
$tv->dispChannel();

class Television{
  private $channelNo;

  function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }
}

?>
</body>
</html>