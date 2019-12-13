<?php
namespace MyApp;
  
class Bingo {
  
  public function create() {
    $numus = [];

for ($i = 0; $i < 5; $i++) {
  $col = range($i * 15 + 1, $i * 15 + 15);
  shuffle($col);
  $nums[$i] = array_slice($col, 0, 5);
}

$nums[2][2] = "FREE";
return $nums;
  }
}


/*
namespaseとは、関数,クラス,インターフェイス,定数（constで定義）で同じ名前を使用するとエラーが出る為、名前空間を使うことで、ここからここまでのコードが○○という空間に属していると定めることができ、同じ名前も使うことができる。

classとは、classオブジェクトを使うことで似たような性質のものや、処理をまとめて使うことができる、

publicとは、アクセス権。public 宣言されたクラスのメンバーには、どこからでもアクセス可能。
プロパティ、メソッドまたは (PHP 7.1.0 以降) 定数のアクセス権 (visibility) は、 キーワード: public, protected または private を指定することにより定義できます。

public function create()とは、『アクセス権、ユーザー定義関数、メソット名()』

rangeとは、特定の範囲の整数やアルファベットを持つ配列を作成する。

shuffleとは、配列をシャッフルする。

array_sliceとは、配列の一部を切り取る関数で、切り取った部分を配列にして返す。

*/
?>