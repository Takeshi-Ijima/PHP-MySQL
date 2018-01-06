<?php
    require_once 'class/create-table.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson2 / クラスを使ってテーブルを作成する</title>
    </head>
    <body>
        <?php
        $obj = new CreateTable();
        $obj->sqlcreateTable();
         ?>
    </body>
</html>
