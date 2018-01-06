<?php
    require_once 'connect.php';

    try{
        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $sql = "select lastname, firstname, jobtitle from employees order by lastname";

        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        die("接続されていません。" . $e->getMessage());
    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lessson3 / </title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>姓</th>
                    <th>名</th>
                    <th>職業</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['lastname']); ?></td>
                    <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                    <td><?php echo htmlspecialchars($row['jobtitle']); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </body>
</html>
