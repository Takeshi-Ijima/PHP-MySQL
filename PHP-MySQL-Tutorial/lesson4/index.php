<?php
    require_once 'pdo.php';

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson4 / データベースへの接続とデータを追加する方法</title>
    </head>
    <body>
        <?php
            $tasks = new InsertDate();
            $tasks->Insert();
         ?>
    </body>
</html>
