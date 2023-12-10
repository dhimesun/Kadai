<?php
$nameError = '';
$phoneError = '';
$emailError = '';
$textareaError = '';
$inquiryError = '';
$name = '';
$phone = '';
$email = '';
$textarea = '';
$inquiry = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $textarea = $_POST["email"];
    $inquiry = $_POST["inquiry"];

    if (empty($name)) {
        $nameError = 'お名前を入力してください';
    }

    if (empty($phone) || !is_numeric($phone) || !(strlen((string)$phone) == 10 || strlen((string)$phone) == 11)) {
      $phoneError = '10桁または11桁の電話番号を入力してください';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = '正しいメールアドレスを入力してください';
    }

    if (empty($textarea)) {
      $textareaError = 'お問い合わせ内容を入力してください';
    }
    if (empty($inquiry)) {
      $inquiryError = '選択してください';
    }
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
    <section class="sec_02">
      <div class="wrapper">
        <div class="sec_02_content">
          <div class="sec_02_box">
            <div class="sec_02_left">
              <p class="b">お名前</p>
              <p class="p">必須</p>
            </div>
            <?php if (!empty($nameError)) : ?>
              <div><?php echo $nameError; ?></div>
                <?php endif; ?>
            <div class="sec_02_right">
                <input type="text" name="name" placeholder="山田太郎" value="<?php echo htmlspecialchars($name); ?>"  required>
            </div>
          </div>
          <div class="sec_02_box">
            <div class="sec_02_left">
              <p class="b">フリガナ</p>
              <p class="p">必須</p>
            </div>
            <?php if (!empty($nameError)) : ?>
              <div><?php echo $nameError; ?></div>
                <?php endif; ?>
            <div class="sec_02_right">
                <input type="text" name="kana" placeholder="ヤマダタロウ" value="<?php echo htmlspecialchars($name); ?>"  required>
            </div>
          </div>
          <div class="sec_02_box">
            <div class="sec_02_left">
              <p class="b">メールアドレス</p>
              <p class="p">必須</p>
            </div>
            <?php if (!empty($emailError)) : ?>
              <div><?php echo $emailError; ?></div>
                <?php endif; ?>
            <div class="sec_02_right">
                <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="info@fast-creademy.jp">
            </div>
          </div>
          <div class="sec_02_box">
             <div class="sec_02_left">
              <p class="b">電話番号</p>
              <p class="p">必須</p>
            </div>
            <?php if (!empty($phoneError)) : ?>
              <div><?php echo $phoneError; ?></div>
                <?php endif; ?>
            <div class="sec_02_right">
                <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>" placeholder="03-1234-5678">
            </div>
          </div>
          <div class="sec_02_box">
            <div class="sec_02_left">
              <p class="b">お問い合わせ項目</p>
              <p class="p">必須</p>
            </div>
            <?php if (!empty($inquiryError)) : ?>
              <div><?php echo $inquiryError; ?></div>
              <?php endif; ?>
            <div class="sec_02_right_01">
              <select name="inquiry" required>
                <option value="">選択してください</option>
                <option <?php if ($inquiry == '問い合わせ1') echo 'selected'; ?>>問い合わせ1</option>
                <option <?php if ($inquiry == '問い合わせ2') echo 'selected'; ?>>問い合わせ2</option>
                <option <?php if ($inquiry == '問い合わせ3') echo 'selected'; ?>>問い合わせ3</option>
              </select>
            </div>
          </div>
          <div class="sec_02_box">
            <div class="sec_02_left">
              <p class="b">お問い合わせ内容</p>
              <p class="p">必須</p>
            </div>
            <?php if (!empty($phoneError)) : ?>
              <div><?php echo $phoneError; ?></div>
                <?php endif; ?>
            <div class="sec_02_right">
                <textarea rows="7" name="phone" value="<?php echo htmlspecialchars($textarea); ?>" placeholder="こちらにお問い合わせ内容をご記入ください"></textarea>
            </div>
          </div>
          <div class="sec_02_box">
            <div class="sec_02_left">
              <p class="b">個人情報保護方針</p>
              <p class="p">必須</p>
            </div>
            <div class="sec_02_right_02">
              <input type="checkbox" id="checkbox">
              <a href="#">個人情報保護方針📗</a>
              <p>に同意します。</p>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <section class="sec_03">
      <div class="wrapper">
        <div class="sec_03_content">
          <input type="submit" value="確認">
          <div class="sec_03_box">
          </div>
        </div>
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