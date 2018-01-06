<?php
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];

    $dbc = mysqli_connect('localhost', 'root', '', 'elvis_store') or die('エラー：MySQLとの接続に失敗しました');

    $query = "insert into email_list (
        last_name,
        first_name,
        email
        ) value (
            '$last_name',
            '$first_name',
            '$email'
        );";

        mysqli_query($dbc, $query) or die('エラー：フォーム内容が追加できませんでした。');

        mysqli_close($dbc);


 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>アドレスが追加されました。</title>
    </head>
    <body>
        <?php
            echo '顧客のメールを追加しました';
         ?>
         <a href="index.php">戻る</a>
    </body>
</html>
