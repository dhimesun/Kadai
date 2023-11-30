<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <!--cssが読み込まれなです-->
  </head>
</head>
<body>
<?php
define('TAX_RATE', 0.1);

$th = array('product' => '商品', 'price' => '価格', 'tax_included' => '税込価格');

$td = array(
    'product1' => '鉛筆',
    'price1' => 100,
    'product2' => '消しゴム',
    'price2' => 200,
    'product3' => '定規',
    'price3' => 300
);
?>

<table>
    <tr>
        <th><?php echo $th['product']; ?></th>
        <th><?php echo $th['price']; ?></th>
        <th><?php echo $th['tax_included']; ?></th>
    </tr>
    <tr>
        <td><?php echo $td['product1']; ?></td>
        <td><?php echo $td['price1']; ?></td>
        <td><?php echo $td['price1'] * (1 + TAX_RATE); ?></td>
    </tr>
    <tr>
        <td><?php echo $td['product2']; ?></td>
        <td><?php echo $td['price2']; ?></td>
        <td><?php echo $td['price2'] * (1 + TAX_RATE); ?></td>
    </tr>
    <tr>
        <td><?php echo $td['product3']; ?></td>
        <td><?php echo $td['price3']; ?></td>
        <td><?php echo $td['price3'] * (1 + TAX_RATE); ?></td>
    </tr>
</table>
</body>
</html>