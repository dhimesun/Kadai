<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <!--これも同じです-->
</head>
<body>
<?php
  define('TAX_RATE', 0.1);
  define('DZ_RATE',12);

  $th = array('product' => '商品', 'price' => '価格', 'tax_included' => '税込価格','dz_price'=>'1Dzの価格');

  $td = array(
      'product1' => '鉛筆',
      'price1' => 100,
      'product2' => '消しゴム',
      'price2' => 200,
  );
?>

  <table>
      <tr>
          <th><?php echo $th['product']; ?></th>
          <th><?php echo $th['price']; ?></th>
          <th><?php echo $th['tax_included']; ?></th>
          <th><?php echo $th['dz_price']; ?></th>
      </tr>
      <tr>
          <td><?php echo $td['product1']; ?></td>
          <td><?php echo $td['price1']; ?></td>
          <td><?php echo $td['price1'] * (1 + TAX_RATE); ?></td>
          <td><?php echo $td['price1'] * (1 + TAX_RATE) * DZ_RATE; ?></td>
      </tr>
      <tr>
          <td><?php echo $td['product2']; ?></td>
          <td><?php echo $td['price2']; ?></td>
          <td><?php echo $td['price2'] * (1 + TAX_RATE); ?></td>
          <td><?php echo $td['price1'] * (1 + TAX_RATE) * DZ_RATE; ?></td>
      </tr>
  </table>

<?php 
  echo '消費税は10%です。';
?>
</body>
</html>