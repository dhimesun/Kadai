<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $tax_rate = 10;

    $product1_name = '鉛筆';
    $product1_price = 100;

    $product2_name = '消しゴム';
    $product2_price = 200;

    $tax_included1 = 110;
    $tax_included2 = 220;

    echo "現在、消費税は{$tax_rate}％です。\n";
    echo "{$product1_name}が{$product1_price}円で税込{$tax_included1}円です。\n";
    echo "{$product2_name}が{$product2_price}円で税込{$tax_included2}円です。\n";
    /*これも同様です*/
  ?>
</body>
</html>