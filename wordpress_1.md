2023/08/25~08/26

# 「WordPressで学ぶPHP ①変数・制御構造編」 藤本壱

## PHPの基礎

- ``` echo date("Y/m/d H:i:s"); ```
- 文字コードは、UTF-8を使う。ShiftJISは文字列の処理時に不具合が起きることがあるので使わない
- 変数 $変数名
- 文字列 ”” と ''
- ""は、中にエスケープシーケンスが記述できる ex. \n,\r,\t,\",\\,\$
- ””は、変数展開も可能
- 変数展開 ..変数を値に置き換える  "  ${変数名}  "
- 「.」 ..文字列の連結
- 複合演算子 .. +=, -=, *=, /=, .=
- echo ..文字を表示
- 連続した文字列を一度に出力する
  - ヒアドキュメント ..echo <<< HERE ... HERE;
  - Nowdoc構文 ..echo <<< 'HERE' ... HERE; ..''と同様に変数展開やエスケープシーケンスが処理されない

- WordPressループ
  - the_title ..投稿のタイトルを出力
  - the_permalink ..投稿ページのアドレスを出力
  - the_date ..投稿日を出力

- 定数の定義
  - define("定数名",定数値); ..慣例的に定数名は大文字
  - ex.``` define("MAXCOUNT",10); ```
       ``` $count = MAXCOUNT; ```

- コメントアウト
  - //
  - /* */

- 複数のPHP部分にまたがる変数
  1つのHTMLファイルにPHP部分を複数いれた場合、あるPHP部分で変数に値を代入すると、それから後に出てくるPHP部分でも、その変数の値は保持される

## 条件分岐

- if文
  - if(条件){条件が成立したときの処理}else{条件が成立しなかったときの処理}
  - <?php if(条件): ?>
    条件が成立したときの処理
    <?php else: ?>
    条件が成立しなかったときの処理
    <?php endif; ?>

- タイムゾーンの設定 ..date_default_timezone_set
- 現在の時刻の取得 ..getdate

- wordpressの条件タグ
  - is_home()
  - is_single()
  - is_page()
  - is_category('カテゴリー名')
  - in_category('カテゴリー名')
  - is_month()
  - bloginfo()

- switch文
  - switch(式){
    case 値1:
    値1のときの処理
    break;
    case 値2:
    値2のときの処理
    break;
    default:
    その他のときの処理
  }

- 三項演算子
  - 変数 = 条件?値1:値2; ..条件がtrueのとき変数=値1、falseのとき変数=値2
  - 変数 = 条件?:値 ..条件がtrueのとき変数=条件、falseのとき変数=値

## 繰り返し処理

- for文
  - for(変数=0;変数<繰り返し回数;変数++){繰り返す処理}
  - <?php for(変数=0;変数<繰り返し回数;変数++):?>
    繰り返して出力する内容
    <?php endif;?>

- get_post_meta(投稿のID,カスタムフィールド名,true)

- while文
  - while(条件){繰り返す処理}
  - <?php while(条件):?>
    繰り返して出力する内容
    <?php endwhile;?>

  - breakとcontinue
    - break 2;  break3;
    - continue 2;

- do~while文
  - do{繰り返す処理}while(条件);
