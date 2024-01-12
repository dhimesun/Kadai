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

    $th = array('product' => '商品', 'price' => '価格', 'tax_included' => '税込価格');

    $td = array(
        array('鉛筆', 100),
        array('消しゴム', 200),
        array('定規', 300)
    );
  ?>

  <table>
      <tr>
          <?php foreach ($th as $value) { ?>
              <th><?php echo $value; ?></th>
          <?php } ?>
      </tr>
      <?php foreach ($td as $value) { ?>
          <tr>
              <?php foreach ($value as $val) { ?>
                  <td><?php echo $val; ?></td>
              <?php } ?>
              <td><?php echo $value[1] * (1 + TAX_RATE); ?></td>
          </tr>
      <?php } ?>
  </table>
</body>
</html>