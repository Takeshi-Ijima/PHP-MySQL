<?php
    //値の取得
    $last_name = $_POST['lastname'];
    $first_name = $_POST['firstname'];
    $email = $_POST['email'];
    $when_it_happened = $_POST['when_it_happened'];
    $how_long = $_POST['how_long'];
    $how_many = $_POST['how_many'];
    $alien_description = $_POST['alien_description'];
    $what_they_did = $_POST['what_they_did'];
    $fang_spotted = $_POST['fang_spotted'];
    $other = $_POST['other'];

    $dbc = mysqli_connect('localhost', 'root', '', 'aliendatabase') or die ('エラー：データベースとの接続に失敗しました。');

    $query = "insert into aliens_abduction(
        last_name,
        first_name,
        when_it_happened,
        how_long,
        how_many,
        alien_description,
        what_they_did,
        fang_spotted,
        other,
        email
        ) values (
            '$first_name',
            '$last_name',
            '$when_it_happened',
            '$how_long',
            '$how_many',
            '$alien_description',
            '$what_they_did',
            '$fang_spotted',
            '$other',
            '$email'
        )";
        mysqli_query($dbc, $query) or die('エラー：問い合わせに失敗');
        mysqli_close($dbc);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP / 値をMySQLに格納する</title>
    </head>
    <body>
        <h1>以下の内容で確認しました。</h1>
        <p>情報提供ありがとうございます。</p>
        <p>誘拐されたのは<strong><?php echo $when_it_happened; ?></strong>で、時間は<strong><?php echo $how_long; ?></strong>前した。</p>
        <p>宇宙人の数は<?php echo $how_many; ?>くらいで、奴らは<?php echo $alien_description ;?>でした。</p>
        <p>宇宙人にされたこと：<?php echo $what_they_did ;?></p>
        <p>ファングはいましたか？</p>
        <p><?php echo $fang_spotted; ?></p>
        <p>コメント</p>
        <p><?php echo $other; ?></p>
        <p>あなたのメールアドレス : <?php echo $email; ?></p>
    </body>
</html>
