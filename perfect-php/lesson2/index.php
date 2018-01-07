<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson2 / フォームの出力</title>
    </head>
    <body>
    <?php
        if(isset($_GET['name']) && strlen($_GET['name']) > 0):
            // isset 変数がセットされていること、そして NULL でないことを検査する
            // $_GET[] form からのsubmitで渡された値を得るための関数？
            // strlen 文字の長さを得る関数（例：hoge だった場合は4と出力される。だが、日本語などはバイト数が出力されるのでその場合は mb_strlenで対応）
     ?>
        <p><?php echo htmlspecialchars($_GET['name'], ENT_QUOTES, "utf-8");?>さん。こんにちは</p>
    <?php endif; ?>

    <form action="index.php" method="get">
        <label>お名前を入力してください : <input type="text" name="name"></label><br>
        <input type="submit" name="submit" value="確認する">
    </form>
    </body>
</html>
