<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab12</title>
</head>
<body>
    Номер телефона
    <form action="index.php" method="get">
        <input type="text" name='Number' required>
        <button>Проверить</button>
    </form>
    <?php
        if (isset($_GET['Number'])) {
            if (preg_match('/^(\+375(\(\d\d\)-[0-9-]{7,})|(\+375\d\d\-[0-9-]{7,}))$/', $_GET['Number'])) {
                echo 'Правильно <br>';
            }
            else {
                echo 'Неправильно <br>';
            }
        }
    ?>
    
    Пароль
    <form action="index.php" method="get">
        <input type="text" name='Password' required>
        <button>Проверить</button>
    </form>
    <?php
        if (isset($_GET['Password'])) {
            if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)\w{8,}$/', $_GET['Password'])) {
                echo 'Хороший пароль <br>';
            }
            else {
                echo 'Слабенько <br>';
            }
        }
    ?>

     Замена слова
    <form action="index.php" method="get">
        <input type="text" name='Word' required>
        <button>Проверить</button>
    </form>
    <?php
        if (isset($_GET['Word'])) {
            echo preg_replace('/п\s*(p|р)\s*(u|и)\s*(B|в)\s*(e|е)\s*(t|т)/iu', 'привет, друг', $_GET['Word']);
        echo '<br>';
        }
    ?>
    
    Скобки
    <form action="index.php" method="get">
        <input type="text" name='Brackets' required>
        <button>Проверить</button>
    </form>
    <?php
        if (isset($_GET['Brackets'])) {
            if (preg_match('/^([^()]*)(\(((?1)(?2)*)*\))(?1)$/', $_GET['Brackets'])) {
                echo 'Все правильно<br>';
            }
            else {
                echo 'Лажа... <br>';
            }
        }
    ?>
    
    Проверка текста
    <form action="index.php" method="get">
        <input type="text" name='Replacer' required>
        <button>Проверить</button>
    </form>
    <?php
    $pattern = ['/жы/iu', '/шы/iu', '/\./', '/координально/iu','/сдесь/iu','/зделал/iu','/зделаю/iu','/зделан/iu','/а /iu','/но /iu'];
    $replace = ['жи', 'ши','. ', 'кардинально','здесь','сделал','сделаю','сделан','а, ','но, '];
    if (isset($_GET['Replacer'])) {
        if ($as = preg_replace($pattern, $replace, $_GET['Replacer'])) {
            echo $as;
        }
    }
       // if ($as = preg_replace('#координально#iu', 'кардинально', $_GET['Replacer'])) {
         //   if ($as = preg_replace('#жы#iu', 'жи', $_GET['Replacer'])) {
             //   if ($as = preg_replace('#\.#iu', '. ', $_GET['Replacer'])) {
             //   if ($as = preg_replace('#шы#iu', 'ши', $_GET['Replacer'])) {
                    
                       // if ($as = preg_replace('#зделал#iu', 'сделал', $_GET['Replacer'])) {
                        //    if ($as = preg_replace('#сдесь#iu', 'здесь', $_GET['Replacer'])) {
                 //           echo "$as";
                      
               //     }
               //}
          //  }
    //    }
  //  }
    ?>
    
   
</body>
</html>