<!DOCTYPE html>
<html>
    <head>
        <title>Head First PHP MySQL</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>姓: <input type="text" name="lastname"></label>
            <label>名: <input type="text" name="firstname"></label>
            <!-- <label>email: <input type="text" name="email"></label> -->
            <input type="submit" name="submit" value="送信">
        </form>

        <!-- 以下出力 -->

        <?php
            $name = $_POST['lastname'] . ' ' . $_POST['firstname'];
            echo $name;
         ?>
    </body>
</html>
