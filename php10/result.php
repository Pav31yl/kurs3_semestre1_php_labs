<?php

session_start();
echo $_SESSION["FIO"];
echo '<br>';
echo '<br>';
$score = 0;
$ans = array(
    array("5 рубелй"),
    array ("Пятое колесо", "Третья фара"),
    array("великобритания"),
    array("Углерод", "Кислород"),
    array("Неподатливость"),

);
echo "Мороженое и вафельный стаканчик стоят 110 рублей. <br>
При этом само мороженое на 100 рублей дороже стаканчика. <br>
 Сколько стоит стаканчик? <br>";

if ($_POST['list1'] = $ans[0][0]) {

    $score++;
    echo ("<span style=\"background-color: green; color: white\">Ответ верный</span><br>");
} else

    echo ("<span style=\"background-color: red; color: white\">Ответ не верный</span><br>");
;

echo "Как называют что-то лишнее, ненужное? (Выберите неправильные ответы)";
if ($_POST['list2'][0] != null)
    foreach ($_POST['list2'] as $value) {
        if ($value == 1 || $value == 3) {
            $score++;
            
            echo ("<span style=\"background-color: green; color: white\">Ответ верный</span><br>");
        } else
            
            echo ("<span style=\"background-color: red; color: white\">Ответ не верный</span><br>");
        ;
    } else
    echo ("<span style=\"background-color: yellow; color: black\">Нет ответа</span><br>");

echo "В какой стране был опубликован первый в мире прогноз погоды?";
if (($_POST['textarea']) == "Великобритания" ) {
    $score++;
    echo ("<span style=\"background-color: green; color: white\">Ответ верный</span><br>");
} else
    echo ("<span style=\"background-color: red; color: white\">Ответ не верный</span><br>");
;

echo "Из чего состоит метан?<br>";

if ($_POST['param1'][0] != null) 
    foreach ($_POST['param1'] as $key => $value) {
        if ($value == 1 || $value == 2) {
            $score++;
            echo ("<span style=\"background-color: green; color: white\">Ответ верный</span><br>");
        } else
            echo ("<span style=\"background-color: red; color: white\">Ответ не верный</span><br>");
        ;
    } else
    echo ("<span style=\"background-color: yellow; color: black\">Нет ответа</span><br>");

echo " Подберите синоним к слову “ригидность”.";
if ($_POST['answer'] == "one") {
    $score++;
    echo ("<span style=\"background-color: green; color: white\">Ответ верный</span><br>");
} else
    echo ("<span style=\"background-color: red; color: white\">Ответ не верный</span><br>");
;

echo "Общий счет:<br>";
echo ($score . " из 5");
?>


<form action="index.php" method="POST">
    <input type=submit value="Вернуться на главную">
</form>