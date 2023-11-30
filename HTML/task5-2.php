<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
      $week = ['日','月','火','水','木','金','土'];
      $i = 0;

      while($i <= 6) {
      echo '<li>'$week[$i].'</li>';
      $i++;
      }
    ?>
  </ul>
</body>
</html>