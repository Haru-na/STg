<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $contact = htmlspecialchars($_POST['contact']);

  if ($name == '') {
    $name_result = '名前が入力されていません';
  } else {
    $name_result = 'Thank you！'.$name.'!';
  }
  if ($email == '') {
    $email_result = 'メールアドレスが入力されていません';
  } else {
    $email_result = 'Email'.'<br>'.$email;
  }
  if ($contact == '') {
    $contact_result = 'お問い合わせ内容が入力されていません';
  } else {
    $contact_result = 'Contact contents'.'<br>'.$contact;
  }
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
  <title>Contact Check</title>
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
    <div class="check normal">
      <h2 class="normal">Contact Check</h2>
      <div class="check-box normal">
        <p class="check-text"><?php echo $name_result ?></p>
        <p class="check-text"><?php echo $email_result ?></p>
        <p class="check-text"><?php echo $contact_result ?></p>
        <form class="check-input" action="thanks.php" method="POST">
          <input type="hidden" name="name" value="<?php echo $name ?>">
          <input type="hidden" name="email" value="<?php echo $email ?>">
          <input type="hidden" name="contact" value="<?php echo $contact ?>">
          <input class="submit" type="button" value="Back" onclick="history.back()">
          <?php if ($name != '' && $email != '' && $contact != '') {?>
            <input class="submit" type="submit" value="OK">
          <?php } ?>
        </form>
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