<?php 
session_start();

echo($_SESSION['FIO']);

/*

function kor($x, $i) {
    
    if ($i === $x) return 1;
    else {
        $i++;
        return sqrt($x+kor($x,$i));
        
    }
    }


*/
$x = 5;
for ($i = 0; $i < 2 ;$i++) {
    $x = $x ** (1 / 2);
    echo $x;
    echo '<br>';
    echo '<br>';
}
$x += $x ** (1 / 2);
echo $x;

?>

<form action="index.php" method="POST">
        <input type=submit value="Вернуться на главную">
    </form>