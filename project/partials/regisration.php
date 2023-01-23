
<?php
session_start();
$name = $_SESSION['name'] ;
$login = $_SESSION['login'] ;
$email = $_SESSION['email'] ;
$password = $_SESSION['password'] ;
$passwordCheck = $_SESSION['passwordCheck'] ;
$phone = $_SESSION['phone'];
$captcha = $_SESSION['captchaCheck'];

$nameError = $_SESSION['nameError'] ;
$loginError = $_SESSION['loginError'];
$emailError = $_SESSION['emailError'];
$passwordError = $_SESSION['passwordError'];
$passwordCheckError = $_SESSION['passwordCheckError'];
$phoneError = $_SESSION['phoneError'] ;
$captchaError = $_SESSION['captchaError'];

?>

<html>
 <head>
  <meta charset="utf-8">
  <title>Регристрация</title>
  <link rel="stylesheet" href="../css/MAIN.css" type="text/css">
 </head>
 <body>
<div class="main__container">
 <form method = "post" action = "partials/regisration_code.php" >
 <label>Ваше ФИО</label><br><input type="text" name="FIO"  maxlength="30" value="<?=@$name;?>"></input></span><br>
 <span class="error"><?=@$nameError; ?><br>
 <label>Логин</label><br><input type="text" name="login"  maxlength="30" value="<?=@$login;?>"></input><br>
 <span class="error"><?=@$loginError; ?><br>
 <label>Почта</label><br><input type="text" name="e-mail"  maxlength="30" value="<?=@$email;?>" ></input><br>
 <span class="error"><?=@$emailError; ?><br>
 <label>Пароль</label><br><input type="password" name="password"  maxlength="30" value="<?=@$password;?>"></input><br>
 <span class="error"><?=@$passwordError; ?><br>
 <label>Повторить пароль</label><br><input type="password" name="password-check" value="<?=@$passwordCheck;?>" maxlength="30"
 ></input><br>
 <span class="error"><?=@$passwordCheckError; ?><br>
 <label>Телефон</label><br><input type="text" name="phone"  maxlength="30" value="<?=@$phone;?>"></input><br>
 <span class="error"><?=@$phoneError; ?><br>
 <label>Пол</label><br>
 <input type=radio class ="radio" name=gen value=M checked>Муж
 <input type=radio class ="radio" name=gen value=W checked>Жен
 <div class="captcha">
    <div class="captcha-img-btn">
        <img id="capcha-image" class="captcha__image" src="../project/partials/captcha.php" 
        width="220" alt="captcha">
        <a href="javascript:void(0);" class="captcha__refresh-btn" 
        onclick="document.getElementById('capcha-image').src='../project/partials/captcha.php?rid=' + 
        Math.random();">Обновить капчу</a>
    </div>
    <div class="box-input captcha-input">
        <label>Код на картинке</label><br>
        <input class="input" name="captcha" type="text" value="<?=@$captcha;?>"><br>
        <span class="error"><?=@$captchaError; ?><br>
    </div>
</div>
 <input type="submit" name="btn" class="button" value="Отправить">
 <a href="../project/partials/autorisation.php">Авторизация</a>
</form>
</div>
</body>
</html>
