<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            echo str_pad($i . " × " . $j . " = " . $i * $j, 12, " ", STR_PAD_LEFT);
        }
        echo "\n";
    }
  ?>
</body>
</html>