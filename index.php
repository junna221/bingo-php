<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();

/*
require_onceとは、外部ファイルを一度だけ読み込む

__DIR__とは、この定数が呼び出されたファイルがあるディレクトリのフルパスを返す、
ディレクトリパスの最後に区切り文字(スラッシュなど)はつかない。
フルパスとは、サーバー内部で、最も上位の階層から参照した際のパス。

newとは、
クラス名を含む文字列を new で指定すると、 そのクラスのインスタンスを作成します。クラスが名前空間に属している場合は、 完全修飾名を指定しなければなりません。

インスタスは、「クラスに対する実体」
クラスに具体的な値を持たせたものと考えることができます。
一つのクラスに対して、インスタンスはいくつでも作成することができます。

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();
インスタンス名 = new クラス名
インスタンス->プロパティ = 値
*/

?>

<!DOVTYPE thml>
<thml lang="ja">
<head>
  <meta charset="utf-8">
  <title>BINGO</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="container">
    <table>
      <tr>
        <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
      </tr>
      <?php for ($i = 0; $i < 5; $i++): ?>
      <tr>
        <?php for ($j = 0; $j < 5; $j++): ?>
        <td><?= h($nums[$j][$i]); ?></td>
        <?php endfor; ?>
      </tr>
      <?php endfor; ?>
    </table>
  </div>
</body>
</thml>