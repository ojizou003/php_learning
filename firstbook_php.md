2023/08/20

# 「プログラミング初心者が最初に読む本！『PHP』編 0からの入門書」

## PHPの基本文法
- 変数..$で始まる
- 関数..複数の文をまとめたもの
- オブジェクト指向プログラミング(OOP)..クラスとオブジェクトを使用してプログラミングを行う方法
- PHPの変数について
  - 値を代入するには = を使用 ex. $num = 10;   &name = "John Doe";
  - 値のデータ型を明示する必要なし
- 関数の定義
  - function 関数名(引数1,引数2,...){処理}
- 関数の呼び出し方
  - 関数名(引数1,引数2,...);
- オブジェクト指向プログラミング（OOP）
  - クラスは、オブジェクトの設計図で、オブジェクトのプロパティとメソッドを定義する
  - オブジェクトは、クラスから生成された実体で、データとメソッドを持っている
```PHP
  class Car{
  public $brand;
  public $color;
  function move(){
    echo "The car is moveing.";
  }
  }
```
```PHP
  $myCar = new Car();
  $myCar->brand = "Toyota";
  $myCar->color = "red";
  $myCar->move();
```
- まずはHTMLとCSSの基本を学ぶ理由
  - PHPで書かれたコードは最終的には、HTMLとCSSに変換されてwebに公開される
  - 理想的には中級者までの知識
- PHPで必要なHTMLの知識
  - フォームタグ
    - テキストボックス、ラジオボタン、チェックボックス、セレクトボックスなど
    - ユーザーからの入力を受け取り、サーバーに送信するために使用される
    ```HTML
    <form>...フォーム全体を囲む
    <input>...テキストボックス、ラジオボタン、チェックボックスなど
    <select>...ドロップダウンリストやプルダウンメニュー
    ```
  - リンクタグ
    ```HTML
    <a href="http://examle.com">Example Link</a>
    ```
  - テーブルタグ
    ```HTML
    <table>
      <tr>
        <td>Column  1</td>
        <td>Column  2</td>
      </tr>
      <tr>
        <td>Data  1</td>
        <td>Data  2</td>
      </tr>
    </table>
    ```
    ```HTML
    <th>タグを使用することで、表の見出しを記述することができる
    <thead>,<tbody>,<tfoot>で表のヘッダー、ボディ、フッターを定義できる
    ```
  - イメージタグ
    - ```<img>```タグを使用して記述
    - ex. ```<img src="image.jpg" alt="example image">```

- PHPで必要なCSSの知識
  - セレクタ
    - タグセレクタ
    - クラスセレクタ
    - IDセレクタ
  - プロパティ
    - color:
    - font-size:
    - background-color:
    - width:
    - height:
    - padding:
    - margin:
    - text-align:
  - ボックスモデル
    - width,height
    - padding
    - border
    - margin
    - box-sizing

- PHPのデバッグ
  - error_reporting
    - error_reporting(E_ALL);
  - ini_set('display_errors',1);
  - var_dump()
  - print_r();
  - debug_backtrace()
  - Xdebug

- PHPのHTTPリクエスト
  - $_GET
    - URLにデータを含めて送信する方法
  - $_POST
    - POSTメソッドで送信されたデータを保持
    - リクエストボディにデータを含めて送信
  - $_REQUEST
    - GET,POST,COOKIEから送信されたデータを保持
  - POSTリクエスト
    - データがURLではなくリクエストボディに含まれているため、セキュリティ上の利点がある
    - 大量のデータを送信するのに適している
  - GETリクエスト
    - URLにデータを含めて送信
    - 検索などで使用することが多い

- cookieについて
  - cookieは、Webサーバーに対してデータを保存するための方法
  - Webサーバーがクライアントのブラウザにデータを送信し、ブラウザがそのデータを保存
  - クライアントがWebサイトを再度訪れた際、ブラウザは前回の訪問時に受け取ったcookieをWebサイトに送信
  - Webサイトは、受け取ったcookieを元に、クライアントに適した情報を提供
  - cookieには有効期限があり、期限が切れるとブラウザはcookieを削除

- セッションについて
  - sessionは、Webアプリケーションにおいて、クライアントの状態を管理するための機能
  - クライアントがWebサイトを訪れた際、サイトがクライアントに一意のIDを割り当てる
  - sessionはcookieに似ているが、cookieがクライアントのブラウザにデータを保存するのに対して、sessionはサーバ側にデータを保存する

- データベースについて
  - PHPからデータベースにアクセスするためには、データベースに対応したドライバ(MySQLi,PDOなど)を使用する

- セキュリティ上の注意点と対策
  - SQLインジェクション
    - 不正なSQL文を挿入されることで、データベースから不正にデータを取得される可能性がある
    - 対策:プレースホルダを使用
           エスケープ処理
  - XSS(クロスサイトスクリプティング)
    - 不正なスクリプトをwebページに埋め込まれ、個人情報を盗まれる可能性がある
    - 対策:エスケープ処理
  - ファイルアップロードの脆弱性
    - 不正なファイルをアップロードされ、サーバーに被害を受ける可能性がある
    - 対策:アップロードファイルのチェック
           アップロード先のフォルダの権限の調整
  - その他のセキュリティ対策
    - 最新のPHPバージョンの使用
    - 不要な機能の無効化
    - エラーや警告を表示するように設定
    - パスワードなどの機密情報を暗号化
    - アクセス制限を儲ける

- PHPのバージョン管理ツール
  - phpenv
  - phpbrew
  - xampp

- フレームワークについて
  - Laravel
  - Symfony
  - CodeIgniter
  - Zend Framework

- mvcの設計について
  - MVC(Model_View_Controller)は、アプリケーションの設計パターンのひとつで、データと表示を分離し、開発を効率化するための枠組みを提供
    - Model..アプリケーションのデータに関連した処理を行う部分
    - View..アプリケーションの表示に関連した処理を行う部分
    - Controlller..ModelとViewを繋ぐ役割
