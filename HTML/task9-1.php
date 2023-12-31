<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $kana = $_POST["kana"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $textarea = $_POST["textarea"];
    $inquiry = $_POST["inquiry"];
    $checkbox = $_POST["checkbox"];
}

try {
  $pdo = new PDO(
      'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
      'root',
      'root',
      [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
      ]
  );

  $stmt = $pdo->prepare("INSERT INTO my_inquiry (name, kana, phone, email, inquiry, textarea) VALUES (?, ?, ?, ?, ?, ?)");

  $stmt->bindParam(1, $name, PDO::PARAM_STR);
  $stmt->bindParam(2, $kana, PDO::PARAM_STR);
  $stmt->bindParam(3, $phone, PDO::PARAM_STR);
  $stmt->bindParam(4, $email, PDO::PARAM_STR);
  $stmt->bindParam(5, $inquiry, PDO::PARAM_STR);
  $stmt->bindParam(6, $textarea, PDO::PARAM_STR);

  $result = $stmt->execute();

} catch (PDOException $e) {
  echo $e->getMessage() . '<br>';
  exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>contactページ|トレース用</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <script src="https://kit.fontawesome.com/23cfeb1953.js" crossorigin="anonymous"></script>
    <link href="css/reset.css" media="screen, projection" rel="stylesheet">
    <link href="css/style8.css" media="screen, projection" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="header">
        <div class="header_left">
          <h1>ここには会社名が入ります</h1>
        </div>
        <div class="header_right">
         <a href="#" class="head_btn_01">ボタン01</a>
         <a href="#" class="head_btn_02">ボタン02</a>
        </div>
      </div>
    </header>
    <div class="menu">
      <a href="#" class="menu_01">メニュー01</a>
      <a href="#" class="menu_02">メニュー02</a>
      <a href="#" class="menu_03">メニュー03</a>
    </div>
    <div class="mv">
      <h1><img src="img/mv.png" alt=""></h1>
    </div>
    <section class="sec_01">
      <div class="wrapper">
        <div class="sec_01_content">
          <div class="sec_01_box">
            <h1>お問い合わせ</h1>
            <p>お問い合わせや業務内容に関するご質問は、電話またはこちらの問い合わせフォームより承っております。<br>後ほど担当者よりご連絡させていただきます。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="sec_02--1">
      <div class="complete">
      <a>送信完了しました。</a>
      </div>
    </section>
    <section class="sec_04">
      <div class="wrapper">
        <div class="sec_04_content">
          <div class="sec_04_box">
            <h3>こちらからご購入ください</h3>
            <a href="#" class="sec_04_btn_01">ネットショップ</a>
          </div>
          <div class="sec_04_box">
            <h3>お気軽にお問い合わせください</h3>
            <a href="#" class="sec_04_btn_02">お問い合わせ</a>
          </div>
        </div>
      </div>
    </section>
    <section class="sec_05">
      <div class="wrapper">
        <div class="sec_05_content">
          <div class="sec_05_box">
            <p><b>ここには会社名が入ります</b></p>
            <p>住所が入ります<br>03-1234-5678<br>営業時間:9:00~18:00</p>
          </div>
        </div>
      </div>
    </section>
    <section class="sec_06">
      <div class="wrapper">
        <div class="sec_06_content">
          <div class="sec_06_box">
            <a herf="#">リンク01</a>
            <a herf="#">リンク02</a>
            <a herf="#">リンク03</a>
            <a herf="#">リンク04</a>
            <a herf="#">リンク05</a>
            <a herf="#">リンク06</a>
          </div>
          <div class="a07">
            <a herf="#">リンク07</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <p>ここには会社名が入ります©copyright</p>
  </footer>
</body>
</html>