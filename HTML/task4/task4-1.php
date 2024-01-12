<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $a = mt_rand(1,100);

    if ($a >= 80) {
    $fortune = '大吉';
    } elseif ($a >= 50) {
    $fortune = '中吉';
    } elseif ($a >= 35) {
    $fortune = '吉';
    } elseif ($a >= 20) {
    $fortune = '凶';
    } elseif ($a >= 5) {
    $fortune = '大凶';
    }

    echo '今日の運勢は' . $fortune . 'です。' ;
  ?>
</body>
</html>