<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $contact = htmlspecialchars($_POST['contact']);

  //データベースへ接続する
  // $dsn = 'mysql:dbname=myportfolio;host=localhost';//データソースネーム
  $dsn = 'mysql:dbname=myportfolio;host=localhost';//データソースネーム
  $user = 'root';
  $password = 'root';
  $dbh = new PDO ($dsn, $user, $password);//dbh:DBハンドラー
  $dbh->query('SET NAMES utf8');
  //SQL文を実行する
  $sql = 'INSERT INTO `sussy`( `name`, `email`, `contact`) VALUES (?,?,?)';
  $data = [$name,$email,$contact];//配列を作っているだけ
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);
  //データベースを切断する
  $dbh = null;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Contact finish</title>
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
    <div class="thank normal">
      <h2 class="normal">Contact contents</h2>
        <div class="thank-box">
          <h3 class="thank-text">Contact details</h3>
          <p class="thank-text">Name :<?=$name?></p>
          <p class="thank-text">Email :<?=$email?></p>
          <p class="thank-text">Contact contents :<?=$contact?></p>
          <p class="thank-text">Thank you very much！</p>
        </div>
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