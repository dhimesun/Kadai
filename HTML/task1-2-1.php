<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  define('TAX_RATE', 0.1);

  $product1_name = '鉛筆';
  $product1_price = 100;

  $product2_name = '消しゴム';
  $product2_price = 200;

  $tax_included1 = $product1_price * (1 + TAX_RATE);
  $tax_included2 = $product2_price * (1 + TAX_RATE);

  echo "現在、消費税は" . (TAX_RATE * 100) . "％です。\n";
  echo "{$product1_name}が{$product1_price}円で税込{$tax_included1}円です。\n";
  echo "{$product2_name}が{$product2_price}円で税込{$tax_included2}円です。\n";
  /* 質問→\nの改行ができませんでした。*/
?>
</body>
</html>