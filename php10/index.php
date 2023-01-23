<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
<form action="picture.php" method="POST">
            <select name=cartoon size=1>
                <option value="images\1.jpg">tom</option>
                <option value="images\2.jpg">jerry</option>
                <option value="images\3.jpg">chepuk</option>
                <option value="images\4.jpg">bags bani</option>
                <option value="images\5.jpg">kasper</option>
                <option value="images\6.jpg">garfild</option>
            </select>
            <input type="submit" value="Показать картинку" />
        </form>
        
        <br>
        <br>
        <form method="POST" action="result.php">Форма:
            <br>
            <br>
            Укажите ФИО:
            <input name="FIO" type="text" maxlength="20" size="25" value="" />
            <br>
            <br>
            Укажите Email:
            <input name="email" type="text" size="25" value="" />
            <br>
            <br>
            Укажите номер телефона (29|33|44XXXXXXX):
            <input name="phone" type="text" maxlength="9" size="7" value="" />
            <br>
            <br>
            Мороженое и вафельный стаканчик стоят 110 рублей. <br>
             При этом само мороженое на 100 рублей дороже стаканчика. <br>
              Сколько стоит стаканчик? <br>
            <select name=list1 size=1>
                <option value="1">5 рублей</option>
                <option value="2">10 рублей</option>
                <option value="3">1 рубль</option>
                <option value="4">15 рублей</option>

            </select>
            <br>
            <br>
            Как называют что-то лишнее, ненужное? (Выберите неправильные ответы)
            <br>
            <select name=list2[] size=3 multiple>
                <option value="1">Пятое колесо</option>
                <option value="2">Второй руль</option>
                <option value="3">Третья фара</option>
            </select>
            <br>
            <br>
            В какой стране был опубликован первый в мире прогноз погоды?
            <br>
            <textarea name="textarea">
            </textarea>
            <br>
            <br>
           Из чего состоит метан?
           <br>
            <input type="checkbox" name="param1[]" value="1">Углерод</input><br>
            <input type="checkbox" name="param1[]" value="2">Водород</input><br>
            <input type="checkbox" name="param1[]" value="3">Кислород</input><br>

            <br>
            <br>
            Подберите синоним к слову “ригидность”.
            <input type=radio name=answer value=one checked>Неподатливость
            <input type=radio name=answer value=two>Неподатливость
            <br>
            <br>
            <input type=submit value="Передать информацию">
        </form>
</body>

<?php
session_start();
echo $_SESSION['FIO'];
?>
</body>
</html>