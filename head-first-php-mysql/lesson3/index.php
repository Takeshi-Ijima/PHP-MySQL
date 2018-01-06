<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson3 / アドレスの追加と削除</title>
    </head>
    <body>
        <h2>メールの追加</h2>
        <form action="mail-add.php" method="post">
            <p><label>姓 : <input type="text" name="last_name"></label></p>
            <p><label>名 : <input type="text" name="first_name"></label></p>
            <p><label>eMail : <input type="text" name="email"></label></p>
            <p><input type="submit" name="submit" value="メールを追加する。"></p>
        </form>
        <h2>メール追加リスト</h2>
        <strong style="color:orange;">
        <?php
            $dbc = mysqli_connect('localhost', 'root', '', 'elvis_store') or die('エラー：データベースに接続失敗しました');
            $query = "select * from email_list";
            $result = mysqli_query($dbc, $query) or die('エラー：クエリー接続の失敗');

            while($row = mysqli_fetch_array($result)){
                echo $last_name = $row['last_name'] , " ";
                echo $first_name = $row['first_name'] , "  ";
                echo $email = $row['email'] . "<br>";
            }
            mysqli_close($dbc);
         ?>
     </strong>
        <h2>メールの削除</h2>
        <p>削除したい<strong>メールアドレス</strong>を入力する</p>
        <form action="mail-delete.php" method="post">
            <label><input type="text" name="email"></label>
            <input type="submit" name="submit" value="削除する">
        </form>
    </body>
</html>
