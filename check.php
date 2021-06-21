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
<header>
    <!-- すし -->
    <div class="menu">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href=""><img src="" alt=""></a></li>
        <li><a href="#about-us">About us</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
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
</body>
</html>