<?php
session_start();
echo ($_SESSION['FIO']);

task4(1, 2, 3, 4);

function task4()
{
    $sum=0;
    $PRED_VAL = 0;
    foreach (func_get_args() as $key => $value) {

        $sum+=$value*$PRED_VAL;
        $PRED_VAL = $value;
    }
    echo($sum);
}
echo '<br>';
echo '<br>';
$a = 10;
$b = 20;
function func ()
{
    global $a, $b;
    
    echo $GLOBALS['a'];

}
func();

?>


<form action="index.php" method="POST">
    <input type=submit value="Вернуться на главную">
</form>