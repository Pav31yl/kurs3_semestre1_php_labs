<?php
session_start();
    $nameError = "";
    $loginError = "";
    $emailError = "";
    $passwordError = "";
    $passwordCheckError = "";
    $phoneError = "";
    $captchaError = "";
if (isset($_POST['btn'])){

    
    
    $name = clearString($_POST['FIO']);
    $login = clearString($_POST['login']);
    $email = clearString($_POST['e-mail']);
    $password = clearString($_POST['password']);
    $passwordCheck = clearString($_POST['password-check']);
    $phone = clearString($_POST['phone']);
    $captcha = clearString($_POST['captcha']);
    $gender = $_POST['gen'];
    $sessionCaptcha = $_SESSION['Captcha'];
    

    //fio ++
    if (!$name) {
        $nameError .= 'Заполните поле';
    }else if (!preg_match('/^[а-яА-Я]*\s[а-яА-Я]*\s[а-яА-Я]*$/iu', $name)) {
        $nameError .= 'ФИО должно содержать только кирилицу';
    }

    //login ++
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
            if ($row) {
                $loginError .= 'Данный логин занят';
            }
        }
    }

    //e-mail ++
    $regex_mail = "/(?!.+\.io).+?@\w{4,7}\.\w{2,4}/";
    if (!$email) {
        $emailError .= 'Заполните поле';
    } else if (!preg_match($regex_mail, $email)) {
        $emailError .= 'Указан неверный формат почты. Так же запрещена почта с доменом .io';
    }
    else {
        $link = mysqli_connect('localhost', 'root', '', 'project_DB') or die("Ошибка подключения к БД");
        $query = 'SELECT user_id FROM Users WHERE E-mail = "' . $email . '"';
        $result = mysqli_query($link, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) { 
                $emailError .= 'Данная почта уже используется';
            }
        }
    }

    //passwords
    //$regex_password = "/^(?!.+[#$%^&_=+-])(?=.+[a-zA-Z])(?=.+[а-яёА-ЯЁ])(?=.+\d).{8,15}$/";
    if (!$password) {
        $passwordError = 'Заполните поле';
    } else if (!preg_match('/^\w+-\w+-\w+-\w+$/', $password)) {
        $passwordError = 'Пароль должен делиться на 4 зоны с помощью -.';
    } else if (strlen($password)<=12) {
        $passwordError = 'Пароль должен быть более 12 симвлолв';
    } 
    } else if (preg_match('/[#|$|%|^|&|_|=|+]/iu', $password)) {
        $passwordError = 'Нельзя использовwwать символы #$%^&_=+ в пароле';
    }

    if (!$passwordCheck) {
        $passwordCheckError .= 'Заполните поле';
    } else if ($password != $passwordCheck) {
        $passwordCheckError .= 'Пароли не совпадают';
    }

    //phone
    if (!$phone) {
        $phoneError .= 'Заполните поле';
    } else if (!preg_match('/^\+375[0-9]{9}$/', $phone)) {
        $phoneError .= 'Телефон должен быть записан в формате +375XXXXXXXXX';
    }

    if (!$captcha) {
        $captchaError .= 'Заполните поле';
    } else if ($captcha != $sessionCaptcha) {
        
        $captchaError .= 'Неверный текст';
    }
   

    //validation
    if($nameError.$loginError.$emailError.$passwordError.$passwordCheckError.
    $phoneError.$captchaError == ''){
        echo "дошло";
        $link = mysqli_connect('localhost', 'root', '', 'project_DB') or die("Ошибка подключения к БД");
        $salt = mt_rand(100, 999);
        $passwordMD5 = md5(md5($password).$salt);
        

        $result = mysqli_query($link, "INSERT INTO `Users` (`FIO`, `Login`, `E-mail`, `Password`, `Phone`, `Gen`, `salt` )VALUES ('{$_POST["FIO"]}', '{$_POST["login"]}', '{$_POST["e-mail"]}', '{$passwordMD5}', '{$_POST["phone"]}', '{$_POST["gen"]}', '{$salt}' )") or
        die("Ошибка " . mysqli_error($link));

        $fs = fopen('sucsess.txt', 'a+');
        fwrite($fs, "Регистрация прошла успешно, время " . date('h:i:s') . ", дата " . date('d.m.y') ."\n");
        fclose($fs);
        if ($result){
            $query="SELECT * FROM Users WHERE Login='$login'";
            $rez = mysqli_query($link, $query);
                if ($rez) {
                    $row = mysqli_fetch_assoc($rez);
                    $_SESSION['FIO']=$row['name'];
                mysqli_close($link);
                
                $_SESSION['login'] = "" ;
                $_SESSION['password'] = "" ;
                $_SESSION['passwordCheck'] = "" ;
                $_SESSION['nameError'] = "";
            $_SESSION['loginError'] = "";
            $_SESSION['emailError'] = "";
                $_SESSION['passwordError'] = "";
            $_SESSION['passwordCheckError'] = "";
                $_SESSION['phoneError'] = "";
            $_SESSION['captchaError'] = "";

                print "<script language='Javascript' type='text/javascript'>
                alert('Вы успешно зарегистрировались! Спасибо!');
                location.href = '../partials/autorisation.php';</script>";;}
                else{
                        print "<script language='Javascript' type='text/javascript'>
                        alert('Вы не были зарегистрированы.');
                        </script>";
                }
        }

    }
    else{
        print($nameError.$loginError.$emailError);
        $fs = fopen('errors.txt', 'a+');
        fwrite($fs, "Регистрация завершена ошибкой, время " . date('h:i:s') . ", дата " . date('d.m.y')."\n");
        fclose($fs);

        $_SESSION['name'] = $name;
        $_SESSION['login'] = $login;
        $_SESSION['email'] = $email;
        
        $_SESSION['password'] = $password;
        $_SESSION['passwordCheck'] = $passwordCheck;
        $_SESSION['phone'] = $phone;
        $_SESSION['captchaCheck'] = $captcha;

        $_SESSION['nameError'] = $nameError;
        $_SESSION['loginError'] = $loginError;
        $_SESSION['emailError'] = $emailError;
        $_SESSION['passwordError'] = $passwordError;
        $_SESSION['passwordCheckError'] = $passwordCheckError;
        $_SESSION['phoneError'] = $phoneError;
        $_SESSION['captchaError'] = $captchaError;

       print "<script language='Javascript' type='text/javascript'>
        alert('Вы не прошли регистрацию ');
        function reload(){top.location = 'http://localhost/project/start.php'};
        reload();
        </script>";
    } 


  

    function clearString($str) {    
        return stripslashes(strip_tags(trim($str)));
    }

    if(isset($_POST['log-out'])){

        //Запускаем сессию
        session_start();
        unset($_SESSION["email"]);
        unset($_SESSION["password"]);
        $_SESSION['FIO'] = "";
        // Возвращаем пользователя на ту страницу, на которой он нажал на кнопку выход.
   
        unset($_SESSION['name'],$_SESSION['login'],$_SESSION['email'],$_SESSION['password'],$_SESSION['passwordCheck'],$_SESSION['phone'],$_SESSION['captchaCheck'], $_SESSION['F.I.O']);

        $_SESSION['nameError'] = "";
        $_SESSION['loginError'] = "";
        $_SESSION['emailError'] = "";
        $_SESSION['passwordError'] = "";
        $_SESSION['passwordCheckError'] = "";
        $_SESSION['phoneError'] = "";
        $_SESSION['captchaError'] = "";

    }








?>