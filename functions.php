<?php
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}


/*
functionとは、ユーザー定義関数を定義するための、function命令。
関数の中では、他の関数や クラス 定義を含む PHPのあらゆる有効なコードを使用することができ。


h($s)とは、hはhtmlspesialcharsの関数名を略したもの、
($s)は、文字列＝stringの頭文字のs。



returnとは、



htmlspecialcharsとは、
フォームから送られてきた値や、データベースから取り出した値をブラウザ上に表示する際に使用します。主に、悪意のあるコードの埋め込みを防ぐ目的で使われます。(エスケープと呼ばれます)
htmlspecialchars(エスケープする文字列, エスケープの種類, 文字コード);


ENT_QUOTESとは、
第二引数のエスケープの種類の１つで、以外にも「ENT_COMPAT」や「ENT_NOQUOTES」等複数ありますが、「ENE_QUOTES」よりエスケープしてくれる文字が少ないので使用する機会はほぼない。



*/