<?php

    // コロンを使った方法
    // if(false):
    //     echo "true";
    // else:
    //     echo "false";
    // endif;

    // フロー演算子　ブロック{}
    // $if = "if文";
    // if($if){
    //     echo $if;
    // }else{
    //     echo "if文ではない";
    // }

    // switch文
    // $m = "iphone";
    // switch($m){
    //     case "iphone":
    //         echo "iphoneユーザー";
    //         break;
    //     case 'Android':
    //         echo "Androidユーザー";
    //         break;
    //     default:
    //         echo "スマホを持ちましょう";
    //         break;
    // }

    // while文
    // $while = 0;
    // while($i <= 10){
    //     echo $i . "<br>";
    //     $i++;
    // }

    // breakで切り抜けることも可能
    // $i = 0;
    // while($i <= 10){
    //     echo $i . "<br>";
    //     $i++;
    //     if($i === 5){
    //         echo "5で終わり";
    //         break;
    //     }
    // }


    $i = 0;
    $v = 0;
    while($i < 10){
        while($v < 10){
            $v++;
            if($v == 5){
                break 2;
            }
        }
        $i++;
    }
    echo $i, "&", $v;



 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HTMLに埋め込む方法</title>
    </head>
    <body>



        <!-- while文 -->

        <ul>
        <?php //$i = 0; ?>
        <?php //while($i <= 10): ?>
            <!-- <li><?php //echo $i . "<br>"; ?></li> -->
        <?php
            // $i++;
            // endwhile;
         ?>
        </ul>


        <!-- switch文をHTMLに埋め込んだ場合 -->
        <!-- ※endswitch; を忘れないこと -->
        <?php
            $switch = NULL;
         ?>

        <?php
            switch($switch):
            case "図書館":
            case "本屋":
            // このようにcaseは複数設置可能
                echo "<p>本がたくさんある。</p>";
                break;
         ?>
        <?php
            case '水族館':
                echo '<p>お魚いっぱい</p>';
                break;
        ?>
        <?php
            case 'IKEA':
                echo '<h1>家具がたくさん。</h1>';
                break;
         ?>
        <?php
            default:
                echo "";
                break;
            endswitch;
         ?>



        <!-- if文をHTMLに埋め込んだ場合 -->
        <?php //$hoge = "php"; ?>
        <?php if($hoge === ture): ?>
            <?php echo "TRUE!!"; ?>
        <?php elseif($hoge === false): ?>
            <?php echo "FALSE!!"; ?>
        <?php else: ?>
            <?php echo ""; ?>
        <?php endif; ?>
    </body>
</html>
