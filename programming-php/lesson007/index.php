<?php
    $word = $_POST['word'];
    $number = $_POST['number'];

    $checks = ceil(strlen($word) / $number);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>form </title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>ワードを入力してください : <input type="text" name="word"></label>
            <label>分割 :<input type="text" name="number"></label>
            <input type="submit" name="submit" value="分割する">
        </form>

        <h3><?php echo "{$word}を{$number}文字ずつ分解した場合は以下のようになります。"; ?></3>
        <?php
            for($i = 0; $i < $checks; $i++){
                $chunk = substr($word, $i * $number, $number);
                printf("%d: %s<br />\n", $i + 1, $chunk);
            }
         ?>
    </body>
</html>
