<?php
    $dbc = mysql_connect('localhost', 'root', '');
    if(!$dbc){
        die("接続失敗：" . mysql_error());
    }
    mysql_select_db('board', $dbc);

    $errors = array();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = null;
        if(!isset($_POST['name']) || !strlen($_POST['name'])){
            $errors['name'] = "お名前を入力してください。";
        }else if(strlen($_POST['name']) > 40){
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
            $sql = "INSERT INTO `post` (`name`, `comment`, `created_time`)VALUES('"
				. mysql_real_escape_string($name) . "','"
				. mysql_real_escape_string($comment) . "','"
				. date('Y-m-d H:i:s') . "')";
            mysql_query($sql, $dbc);
            mysql_close($dbc);
            header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
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


        <form action="chat-page.php" method="post">
		<?php if(count($errors)){
			echo '<ul class="error_list">';
			foreach($errors as $error){
				echo '<li>';
					echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8');
				echo '</li>';
			}
			echo '</ul>';
		}
		?>
		名前: <input type="text" name="name"/><br/>
		ひとこと: <input type="text" name="comment" size="60" /><br/>
		<input type="submit" name="submit" value="投稿する" />
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
