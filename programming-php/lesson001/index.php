<?php

    // ユーザ定義・組み込み関数名は大文字小文字は区別されない。
    echo "Hi PHP" . "<br>";
    ECHO "Hi PHP" . "<br>";
    Echo "Hi PHP" . "<br>";

    // 一方変数名は区別される
    $name = "小林";
    $Name = "コバヤシ";
    $NAME = "こばやし";

    echo $name . "<br>";
    echo $Name . "<br>";
    echo $NAME . "<br>";

    /*
        コメントの種類
    */

    // コメント

    #　コメント

    // シングルクォートとダブルクォートの違い

    $single = "シングルクォート";
    $double = "ダブルクォート";

    // 変数は文字列として出力
    echo '$single' . "<br>";
    // 変数が展開される
    echo "$double" . "<br>";


    if($null === null){
        // $null という変数は存在しないので NULL が設定される
        echo "yes null" . "<br>";
    }

    /*
        シンボルテーブルについて
    */

    $array = array(
        "配列",
        1234,
        "こんにちは"
    );

    // 配列はコピーされない
    $arrays = $array;
    echo $arrrays;

    // 配列のコピー
    $array[1] = "コピー";

    echo $array[1] . '<br>';


    /*
        演算子の順位
    */

    $sum = 1 + 3 * 4; //13
    echo $sum . '<br>';
    $sum2 = (1 + 4) * 5; //25
    echo $sum2 . '<br>';
 ?>
