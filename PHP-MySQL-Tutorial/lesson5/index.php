<?php

    require_once 'dbc.php';

    $update = new UpdateDate();

    if($update->update(2, 'MySQLとPHPの使い方', 'ここではUPDATE文のやり方について解説しています。', '2018-01-08', '2018-01-08') !==false)
        echo "情報を更新しました。";
    else
        echo "更新に失敗しました。";
 ?>
