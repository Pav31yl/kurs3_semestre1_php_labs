<?php
session_start();
echo ($_SESSION['FIO']);

$today=  date('d.m.y');
var_dump($today);

function days($a, $b)
{
   
    $today1 = explode(".", $a);
    $s1 = explode(".", $b);

     if($today1[0]>$s1[0])
     {
            $day = $today1[0] - $s1[0];
           
     }   
     else{
            $day = $s1[0] - $today1[0];
         
     }

     if($today1[1]>$s1[1])
     {
            $month = $today1[1] - $s1[1];
                }   
     else{
            $month = $s1[1] - $today1[1];
            
     }
     if($today1[2]>$s1[2])
     {
            $year = $today1[2] - $s1[2];
                 }   
     else{
            $year = $s1[2] - $today1[2];
          
     }

    $itog = $day + ($month * 30) + ($year * 365);
    echo " raznica mejdu datami: " . $itog . " den";
    }
echo days("12.01.2023", "13.02.2023");

?>

<form action="index.php" method="POST">
    <input type=submit value="Вернуться на главную">
</form>