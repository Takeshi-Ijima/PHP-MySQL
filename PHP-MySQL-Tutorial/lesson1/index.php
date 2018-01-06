<?php
    require_once 'dbc.php';
 ?>
<!DOCTYPE html>
<html>
    <haad>
        <meta charset="utf-8">
        <title>lesson1 / データベースの接続</title>
    </head>
    <body>
        <?php
            try{
                $dbc = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
                echo "'{$dbname}'に接続しました。";
            }catch(PDOException $e){
                die("接続に失敗。エラー内容：" . $e->getMessage());
            }

         ?>
    </body>
</html>
