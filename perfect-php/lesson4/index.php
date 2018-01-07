<?php
    $dbc = mysql_connect('localhost', 'root', '');
    if(!$dbc){
        die("接続失敗：" . mysql_error());
    }
    mysql_select_db('board', $dbc);
    // echo $_SERVER['SERVER_ADDR'];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson4 / フォーム入力をデータベースに入れデータを出力する</title>
    </head>
    <body>
        <h1>スモールチャット</h1>
        <form action="chat-page.php" method="post">
            <p>お名前 : <input type="text" name="name"></p>
            <p>メッセージ : <input type="text" name="comment" size="60"></p>
            <p><input type="submit" name="submit" value="メッセージを送る"></p>
        </form>
        <h2>投稿内容一覧</h2>
        <?php
            $select = "select * from post order by created_time desc";
            $result = mysql_query($select, $dbc);
         ?>
        <?php if($result !== false && mysql_num_rows($result)): ?>
        <ul>
            <?php while($post = mysql_fetch_assoc($result)): ?>
                <li>
                    <?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'utf-8'); ?> :
                    <?php echo htmlspecialchars($post['comment'], ENT_QUOTES, 'utf-8'); ?>
                     - <?php echo htmlspecialchars($post['created_time'], ENT_QUOTES, 'utf-8'); ?>
                </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <?php
            mysql_free_result($result);
            mysql_close($dbc);
         ?>
    </body>
</html>
