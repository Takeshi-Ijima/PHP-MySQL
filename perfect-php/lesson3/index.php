<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson3 / フォーム入力をデータベースに入れデータを出力する</title>
    </head>
    <body>
        <h1>スモールチャット</h1>
        <form action="chat-page.php" method="post">
            <p>お名前 : <input type="text" name="name"></p>
            <p>メッセージ : <input type="text" name="comment" size="60"></p>
            <p><input type="submit" name="submit" value="メッセージを送る"></p>
        </form>
    </body>
</html>
