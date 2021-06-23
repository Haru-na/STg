<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
</head>
<body>
  <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Contact</title>
</head>
<body>
    <!-- すし -->
    <div class="stars"></div>
  <div class="twinkling"></div>
  <div class="clouds"></div>
  <header>
    <section class="ham">
      <div class="btn-trigger" id="btn17">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <div>
      <ul class="menu">
        <li><a href="">Home</a></li>
        <li><a href="#works">Works</a></li>
        <!-- 本来はlogoを入れる -->
        <li><a href=""><img src="./assets/images/header-logo yellow.png" alt=""></a></li>
        <li><a href="#about-us">About us</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </header>
  <main>
    <div class="contact">
      <h2>Contact</h2>
        <form action="check.php" method="POST">
          <div class="contact-box">
            <input class="contact-input" type="text" name="name" placeholder="名前">
            <input class="contact-input" type="email" name="email" placeholder="メール">
            <input class="address-text" type="text" id="zipcode" name="addressNo" placeholder="郵便番号" maxlength="7" required>
            <p>※7桁の半角数字で入力してください</p>
            <input class="address-btn" type="button" value="検索" id="serch_btn">
            <div id="zip-result"></div>
            <input class="contact-input" type="text" name="address" id="address" placeholder="住所">
            <textarea class="contacts" name="contact"  cols="30" rows="10" placeholder="お問い合わせ"></textarea>
            <input class="submit" type="submit" value="送信">
           </div>
        </form>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./assets/js/ajax.js"></script>
</body>
</html>
</body>
</html>