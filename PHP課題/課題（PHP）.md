# PHP課題

## ①環境構築（一緒にやりましょう）
- WSLインストール
  - https://learn.microsoft.com/ja-jp/windows/wsl/install
- Dockerインストール
  - https://learn.microsoft.com/ja-jp/windows/wsl/tutorials/wsl-containers
  ```
  docker run hello-world
  ```

## ②PHP入門
- https://www.javadrive.jp/php/#section_install

### PHP環境について
- ローカルの環境は`Docker`を用いて構築します。
- docker-compose.ymlがあるディレクトリで`docker-compose up -d`と叩いてください
- その後`http://localhost/sample.php`をブラウザで開いてください
  - 「Hello Word!!」と表示されていたらOKです

### 以下のセクションを進めてください
1. 文字列
2. 数値と四則演算
3. 変数
4. 条件分岐
5. 繰り返し処理
6. 配列
7. 関数
8. クラスとは何か
9. クラスの定義
10. ユーザー認証
11. クッキーの利用
12. セッション管理
13. MySQLへの接続(※)
※DBを用意する必要があるので作業前に連絡ください。一緒に構築しましょう。
14.   PDOの利用
15.   メール使用のための環境設定
16.   メール送信
17.   PHPサンプルプログラム

## その他
- 課題の成果物のソースコードはGitにPUSHしてください
- HPの作業が発生したらそちらを優先してください
- ↑の課題が終わったら、次はLaravel（PHPのフレームワーク）を勉強してもらいます
