<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $address = htmlspecialchars($_POST['address']);
  $contact = htmlspecialchars($_POST['contact']);

  if ($name == '') {
    $name_result = '名前が入力されていません';
  } else {
    $name_result = 'Thank you！'.$name.'!';
  }
  if ($email == '') {
    $email_result = 'メールアドレスが入力されていません';
  } else {
    $email_result = 'Email'.$email;
  }
  if ($address == '') {
    $address_result = '住所が入力されていません';
  } else {
    $address_result = 'address'.$address;
  }
  if ($contact == '') {
    $contact_result = 'お問い合わせ内容が入力されていません';
  } else {
    $contact_result = 'Contact contents'.$contact;
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Contact Check</title>
</head>
<body>
    <!-- すし -->
    <div class="stars"></div>
  <div class="twinkling"></div>
  <div class="clouds"></div>
  <header>
    <!-- すし -->
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
    <div class="check">
      <h2>Contact Check</h2>
      <div class="check-box">
        <p class="check-text"><?php echo $name_result ?></p>
        <p class="check-text"><?php echo $email_result ?></p>
        <p class="check-text"><?php echo $address_result ?></p>
        <p class="check-text"><?php echo $contact_result ?></p>
        <form class="check-input" action="thanks.php" method="POST">
          <input type="hidden" name="name" value="<?php echo $name ?>">
          <input type="hidden" name="email" value="<?php echo $email ?>">
          <input type="hidden" name="address" value="<?php echo $address ?>">
          <input type="hidden" name="contact" value="<?php echo $contact ?>">
          <input class="submit" type="button" value="Back" onclick="history.back()">
          <?php if ($name != '' && $email != '' && $address != '' && $contact != '') {?>
            <input class="submit" type="submit" value="OK">
          <?php } ?>
        </form>
      </div>
    </div>
  </main>
</body>
</html>