<?php
    $dbc = mysql_connect('localhost', 'root', '');
    if(!$dbc){
        die("接続失敗：" . mysql_error());
    }
    mysql_select_db('board', $dbc);

    $errors = array();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = null;
        if(!isset($_POST['name']) || strlen($_POST['name'])){
            $errors['name'] = "お名前を入力してください。";
        }else if(strlen[$_POST['name'] > 40]){
            $errors['name'] = "お名前は40文字以内で入力してください";
        }else{
            $name = $_POST['name'];
        }

        $comment = null;
        if(!isset($_POST['comment']) || !strlen($_POST['comment'])){
            $errors['comment'] = "メッセージ入力してください。";
        }else if(strlen($_POST['comment']) > 200){
            $errors['comment'] = "メッセージは200文字以下でお願いします";
        }else{
            $comment = $_POST['comment'];
        }

        if(count($errors) === 0){
            $sql = "INSERT INTO post (
                    name, comment, created_time
                )VALUES(
                    'mysql_real_escape_string($name)',
                    'mysql_real_escape_string($comment)',
                    'date('\Y-m-d H:i:s'\)'
                )";
            mysql_query($sql, $dbc);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>チャット一覧</title>
    </head>
    <body>
        <h1>スモールチャット</h1>

    </body>
</html>
