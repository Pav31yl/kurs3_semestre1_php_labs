
<?php
session_start();
$login = $_SESSION['login'] ;
$password = $_SESSION['password'] ;
$passwordCheck = $_SESSION['passwordCheck'] ;
if (isset($_POST['btn'])){


    $nameError = "";
    $loginError = "";
    $emailError = "";
    $passwordError = "";
    $passwordCheckError = "";
    $phoneError = "";
    $captchaError = "";

    $login = clearString($_POST['login']);
    $password = clearString($_POST['password']);
    $passwordCheck = clearString($_POST['password-check']);

    //login
    $log_regex = "/^(?=.+[a-zA-Zа-яёА-ЯЁ])(?=.+\d).{2,}$/";
    $log_regex_4symb = "/(.)\\1{3}/";
    if (!$login) {
        $loginError .= 'Заполните поле';
    } else if (!preg_match($log_regex, $login)) {
        $loginError .= 'Логин должен содержать буквы и цифры';
    } else if (preg_match_all($log_regex_4symb, $login)) {
        $loginError .= 'В логине не может быть 4 повторяющихся символа';
    } else {
        $link = mysqli_connect('localhost', 'root', '', 'project_DB') or die("Ошибка подключения к БД");
        $query = 'SELECT user_id FROM Users WHERE Login = "' . $login . '"';
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if (!$row) {
                $loginError .= 'Такого пользователя нет';
            }
        }
    }


    //passwors
    if (!$password) {
        $passwordError = 'Заполните поле';
    } else if (!preg_match('/^\w+-\w+-\w+-\w+$/', $password)) {
        $passwordError = 'Пароль должен делиться на 4 зоны с помощью -.';
    } else if (strlen($password)<=12) {
        $passwordError = 'Пароль должен быть более 12 симвлолв';
    } 
    else if (preg_match('/[#|$|%|^|&|_|=|+]/iu', $password)) {
        $passwordError = 'Нельзя использовать символы #$%^&_=+ в пароле';
    }

    if (!$passwordCheck) {
        $passwordCheckError .= 'Заполните поле';
    } else if ($password != $passwordCheck) {
        $passwordCheckError .= 'Пароли не совпадают';
    }


    if($loginError.$passwordError.$passwordCheckError == ''){
        $link = mysqli_connect('localhost', 'root', '', 'project_DB');
        $query = "SELECT Login, Password,  salt, FIO FROM Users WHERE Login = '".$_POST['login']."'";

        

        $result = mysqli_query($link, $query) or
         die("Ошибка " . mysqli_error($link));

         $arr = mysqli_fetch_assoc($result);
        
         $passwordMD5 = md5(md5($password).$arr['salt']);

         if($arr['Password'] == $passwordMD5){
            session_start();
            $_SESSION['FIO'] = $arr['FIO'];
           
            print "<script language='Javascript' type='text/javascript'>
            alert(`Вы успешно вошли
            в аккаунт!`);
            function reload(){top.location = 'body.php'};
            reload();
            </script>";
         }
         else{
            print "<script language='Javascript' type='text/javascript'>
            alert('Пользователя с таким паролем не существует!');</script>";
         }
    }
    else{
        
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['passwordCheck'] = $passwordCheck;

        $_SESSION['loginError'] = $loginError;
        $_SESSION['passwordError'] = $passwordError;
        $_SESSION['passwordCheckError'] = $passwordCheckError;

        print "<script language='Javascript' type='text/javascript'>
        alert('ВЫ не прошли авторизацию ');
        
        </script>";
    }


}

function clearString($str) {    
    return stripslashes(strip_tags(trim($str)));
}

?>

<html>
 <head>
  <meta charset="utf-8">
  <title>Аввторизация</title>
  <link rel="stylesheet" href="../css/MAIN.css" type="text/css">
 </head>
 <body>
 <?php require 'header.php'?>
 <div class="main__container">
 <form method = "post" action = "" >
 <span class="error"><?=@$loginError; ?><br>
 <label>Логин</label><br><input type="text" name="login"  maxlength="30" value="<?=@$login;?>"></input><br>
 <span class="error"><?=@$passwordError; ?><br>
 <label>Пароль</label><br><input type="password" name="password"  maxlength="30" value="<?=@$password;?>"></input><br>
 <span class="error"><?=@$passwordCheckError; ?><br>
 <label>Повторить пароль</label><br><input type="password" name="password-check"  maxlength="30" value="<?=@$passwordCheck;?>"></input><br>
 <input type="submit" name="btn" class="button" value="Войти"> 

 <a href="../../project/start.php">Регистация</a>
</form>
</div>
<?php require 'footer.php'?>
</body>
</html>