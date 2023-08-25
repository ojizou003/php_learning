2023/08/25

# 「PHP Todoリストを作ろう」 DESIGNMAP

## データベースの作成とテーブルの作成

### Apatch と MySQL を起動

- Apatchは、webサーバー
- phpはWebサーバーで動作する言語なので、Apatchが起動していないと動作しない
- データベースの作成
- c.f. wordpresssは11個のテーブルで構成されている

## テーブルにデータを挿入する

- HTMLで入力欄と送信ボタンを作る
- HTMLフォームの動作の確認
- $_POSTは、HTMLフォームからPOSTメソッドで送られてきたデータを連想配列の形で格納
- isset関数
- htmlspecialchars関数
  - ENT_QUOTES
- PDOクラス ..PHPからデータベースに接続するときに使う
- ->は、インスタンスのメソッドを呼び出すときに使う演算子
- INSERT INTO テーブル名(カラム名,カラム名,カラム名) VALUES(値,値, 値) ..SQL文
- ? ..プレースホルダ ..セキュリティ対策
- データベースとの接続エラーを表示する

## データベースと接続するコードを関数化する

### 自己定義関数の定義

- PHPコードだけの外部ファイルの場合、最後の?>は通常書かない

### 外部ファイルの読み込み/関数の呼び出し

``` require_once('functions.php'); ```

## タスク名を表示する

### SELECT文でデータベースの値を表示する

``` $sql ='SELECT id, done FROM tasks ORDER BY id DESC'; ```
- SELECT カラム名,カラム名 from テーブル名
- ``` ORDER BY id DESC ``` ..id降順
- PDO::FETCH_ASSOC ..連想配列の形で取得

## 「done」ボタンを押すと表示されなくなる機能を追加


