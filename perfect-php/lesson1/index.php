<?php
    $hour = date('H');
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lesson1 / 現在の時刻と挨拶</title>
    </head>
    <body>
        <h1>ただいまの時刻は<?php echo $hour; ?>時です。</h1>
    <?php if(5 <= $hour && $hour < 10): ?>
        <p>今日も1日頑張りましょ。</p>
    <?php elseif(10 < $hour && $hour < 18): ?>
        <p>お仕事も残りわずかです。頑張っていきましょう。</p>
    <?php else: ?>
        <p>お仕事お疲れ様です。</p>
    <?php endif; ?>
    </body>
</html>
