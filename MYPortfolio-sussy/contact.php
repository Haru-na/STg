<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Contact</title>
</head>
<body>
  <header class="normal">
    <ul class="nav normal">
    <div id="navArea">
        <nav class="normal">
          <div class="inner">
            <ul>
              <li><a href="./index.html"  class="normal">Myself</a></li>
              <li><a href="./myhobby.html"  class="normal">Myhobby</a></li>
              <li><a href="./contact.php"  class="normal">Contact</a></li>
            </ul>
          </div>
        </nav>
        <div class="toggle_btn">
          <span class="btnoff"></span>
          <span class="btnoff"></span>
          <span class="btnoff"></span>
        </div>
        <div id="mask"></div>
      </div>
      <li><a href="./index.html" class="normal">Myself</a></li>
      <li><a href="./myhobby.html" class="normal">Myhobby</a></li>
      <li><a href="./contact.php" class="normal">Contact</a></li>
    </ul>
    <div class="toggle-switch">
      <input id="toggle" class="toggle-input input" type='checkbox' />
      <label for="toggle" class="toggle-label label">
        <span></span>
    </div>
  </header>
  <main class="normal">
    <div class="contact normal">
      <h2 class="normal">Contact</h2>
        <form action="check.php" method="POST">
          <div class="contact-box normal">
            <input class="contacts" type="text" name="name" placeholder="名前">
            <input class="contacts" type="email" name="email" placeholder="メール">
            <textarea class="contacts" name="contact"  cols="30" rows="10" placeholder="お問い合わせ"></textarea>
            <input class="submit" type="submit" value="送信">
           </div>
        </form>
    </div>
  </main>
  <footer>
    <div class="fooder-contents normal">
      <div class="snsnav">
        <a href="https://twitter.com/home?lang=ja">
          <img class="sns" src="./assets/img/2021 Twitter logo - blue.png" alt="">
        </a>
        <a href="https://www.instagram.com/?hl=ja">
          <img class="sns" src="./assets/img/Instagram_Glyph_Gradient_RGB.png" alt="">
        </a>
        <a href="https://www.facebook.com/profile.php?id=100037205682231">
          <img class="sns" src="./assets/img/f_logo_RGB-Blue_58.png" alt="">
        </a>
      </div>
      <p class="normal">&copy; nishikawa yuki .</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./assets/js/app.js"></script>
</body>
</html>