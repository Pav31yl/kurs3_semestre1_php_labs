
<h3> Форма регистрации</h3>
<form method="get">
    <div>Логин</div>
    <input type = text name = login required>
    <div>Почта</div>
    <input type="email" name = email required>
    <div>Пароль</div>
    <input type="password" name = password required>
    <input type= "submit" name = submit1 value="Подтвердить">
</form>
<?php
if (isset($_GET['login']) && isset($_GET['email']) && isset($_GET['password'])) {


    $txt = fopen("reg.txt", "a");
    $log = $_GET['login'];
    $mail = $_GET['email'];
   $psw =  $_GET['password'];
    $inf = array( $_GET['login'], $_GET['email'], $_GET['password']);
 
    $arr = implode($inf, "\n");
    //var_dump($arr);
    $txt1 = $arr."\n";
    fwrite($txt, $txt1);
    
}
?>

<h3> Форма входа</h3>
<form method="get">
    <div>Логин</div>
    <input type = text name = login2 required>
    <div>Пароль</div>
    <input type="password" name = password2 required>
    <input type= "submit" name =submit2 value="Подтвердить">
</form>

<?php
if (isset($_GET['login2']) && isset($_GET['password2'])) {


    $txt = fopen("reg.txt", "r");
    $filess = file("reg.txt");
  //  $fff = explode(" ", $filess);
   // var_dump($filess);
    $log2 = $_GET['login2'];
    $psw2 =  $_GET['password2'];
   // var_dump($filess);
    for ($i = 0; $i < count($filess); $i++) {
        //  var_dump( $filess[$i]); 
        // foreach ($filess as $item) {
        //     var_dump($item);
        if ($filess[$i] == "$log2\n") {
            $buf1 = $filess[$i];
            for ($i = 0; $i < count($filess); $i++) {
                if ($filess[$i] == "$psw2\n") {
                    $link = mysqli_connect('localhost', 'root', '', 'zachet') or die("Ошибка подключения к БД");
                    $result = mysqli_query($link, "INSERT INTO `zadanie` (`login`, `password`)VALUES ('$buf1}', '{$filess[$i]}')") or
                    die("Ошибка " . mysqli_error($link));

                }
            }

        }
    }

 
}

?>