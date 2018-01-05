<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP / 値をMySQLに格納する</title>
    </head>
    <body>
        <h1>情報を入力してください。</h1>
        <form action="/lesson2/report.php" method="post">
            <p><label>姓: <input type="text" name="lastname"></label></p>
            <p><label>名: <input type="text" name="firstname"></label></p>
            <p><label>メールアドレス: <input type="text" name="email"></label></p>
            <p><label>いつ頃ですか？ <input type="text" name="when_it_happened"></label></p>
            <p><label>何時間ぐらいですか？ <input type="text" name="how_long"></label></p>
            <p><label>何人見ましたか？ <input type="text" name="how_many"></label></p>
            <p><label>どんな奴らでしたか？ <input type="text" name="alien_description"></label></p>
            <p><label>何をされていましたか？ <input type="text" name="what_they_did"></label></p>
            <p>飼い犬（ファング）を見ましたか？ <label>はい <input type="radio" value="はい" name="fang_spotted"></label> <label>いいえ <input type="radio" value="いいえ" name="fang_spotted"></label></p>
            <p><label>何か他にコメントは？</label></p>
            <textarea name="other"></textarea>
            <p><label><input type="submit" name="submit" value="送信する"></label></p>
        </form>
    </body>
</html>
