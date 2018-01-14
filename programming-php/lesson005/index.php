<?php
    // 配列
    // arrayは必ずarrayと宣言すること
    $array = array(
        'macbook air',
        'macbook pro',
        'iMac',
        'Mac Pro'
    );
    // echo $array[1];

    // 配列に追加する
    // $array[] = "iMac Pro";
    // echo $array[4];

    // 連想配列
    $addresses = array(
        'Tanaka' => 'hogehoge@gmail.com',
        'Kamimura' => 'ttttt@gmail.com',
        'Hamada' => 'auaua@gmail.com',
        'Ishikawa' => 'wwweffa@gmail.com'
    );
    // echo $addresses[Tanaka];

    // $addressesの配列にある数を出力
    // echo $count = count($addresses);

    // array_key_exists使いかた

    // if(array_key_exists('iMac', $array)){
    //     echo "ありました！";
    // }else{
    //     echo "そのようなキーワードは存在しませんでした。";
    // }

    $useraddress = array(
        'hoge@gmail.com',
        'aaaaaaaaa@gmail.com',
        'iiii@gmail.com',
        'ooooo@gmail.com',
    );
    // foreach($useraddress as $address){
    //     echo $address. "<br>";
    // }
//
//     $person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
// foreach ($person as $key => $value) {
//     echo "Fredの{$key}は{$value}です\n";
// }

    $translate = array(
        'おはよう' => 'Good morning',
        'こんにちは' => 'Hello',
        'こんばんは' => 'Good evening'
    );
    // foreach($translate as $jp => $en){
    //     echo "【{$jp}】は英語で【{$en}】" . "<br>";
    // }

    //
    $array_search = array(
        'name' => "Gen",
        '年齢' => 12,
        'sex' => "boy"
    );

    $s = array_search('12', $array_search);
    // echo $s . "12才です。";

    // 集合
    // 重複しているものを削除　和集合
    function arrayunion($a, $b){
        $union = array_merge($a, $b);
        $union = array_unique($union);

        return $union;
    }
    $aaa = array(
        1,
        "two",
        3
    );
    $bbb = array(
        1,
        "2",
        3
    );
    $union = arrayunion($aaa, $bbb);
    // print_r($union);
    







 ?>
