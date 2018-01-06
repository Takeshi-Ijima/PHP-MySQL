<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson3 / 削除しました、</title>
    </head>
    <body>
        <?php
            $dbc = mysqli_connect('localhost', 'root', '', 'elvis_store') or die('エラー：データベースに接続失敗しました');
            $email = $_POST['email'];
            $query = "delete from email_list where email = '$email'";
            mysqli_query($dbc, $query) or die("エラー：クエリーの失敗");

            echo "メールアドレス： {$email} を削除しました。";
            mysqli_close($dbc);
         ?>
    </body>
</html>
