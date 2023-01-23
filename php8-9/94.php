<?php
session_start();
echo ($_SESSION['FIO']);




function task3($a, $b)
{
    $a = explode($b, $a);
    return $a;
}

var_dump(task3("weqweqweqwffsdfsd. fdlf. kfjsld", ". "));
?>


<form action="index.php" method="POST">
    <input type=submit value="Вернуться на главную">
</form>