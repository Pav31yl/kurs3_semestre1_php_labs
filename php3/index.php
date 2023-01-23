<html>
    <body>
        <?php
        $num1 = 16;
        $num2 = 4;
        $num3 = 555;
        $otric = -$num1;
        $minus = $num1 - $num2;
        $plus = $num1 + $num2;
        $umn = $num1 * $num2;
        $del = $num1/$num2;
        $mod = $num1%$num2;
echo "1";
echo"<br>";
echo "<br>";
echo  "num1 = $num1 a -num1 = $otric";
echo"<br>";
echo "$num1 - $num2 = $minus";
echo"<br>";
echo "$num1 + $num2 = $plus";
echo"<br>";
echo "$num1 * $num2 = $umn";
echo"<br>";
echo "$num1 / $num2 = $del";
echo"<br>";
echo "$num1 % $num2 = $mod";


echo"<br>";
echo "<br>";
echo"---------------------------------------------------------------";
echo "<br>";
echo"<br>";
echo "2";
echo "<br>";
echo "<br>";


echo "++$num1 = ".++$num1;
echo"<br>";
echo "$num3++ = ".$num3++;
echo"<br>";
echo "$num3";
echo"<br>";
echo "$num3-- = ".$num3--;
echo"<br>";
echo "$num3";
echo"<br>";
echo "--$num1 = ".--$num1;


echo"<br>";
echo "<br>";
echo"---------------------------------------------------------------";
echo "<br>";
echo"<br>";
echo "3";
echo "<br>";
echo "<br>";


$heh = 11;
$heh2 = ($heh = 123) +123;
$hehe = "haha ";
echo "$heh";
echo"<br>";
echo "$heh2 = $heh + 123";
echo"<br>";
echo "$hehe";


echo"<br>";
echo "<br>";
echo"---------------------------------------------------------------";
echo "<br>";
echo"<br>";
echo "4";
echo "<br>";
echo "<br>";


$hehe .= "hehe";
echo "$hehe";
echo "<br>";
$gg = $hehe. " ahahah";
echo "$gg";



echo"<br>";
echo "<br>";
echo"---------------------------------------------------------------";
echo "<br>";
echo"<br>";
echo "5";
echo "<br>";
echo "<br>";


$ee = $num3&19;
$eelee = $num3|19;
$minus_eelee = $num3^19;
$sdvig = $num3<<4;
$sdvig1 = $num3>>1;
echo "$num3 & 19 = $ee";
echo "<br>";
echo "$num3 | 19 = $eelee";
echo "<br>";
echo "$num3 ^ 19 = $minus_eelee";
echo "<br>";    
echo "$num3<<4 = $sdvig";
echo "<br>";
echo "$num3>>1 = $sdvig1";


echo"<br>";
echo "<br>";
echo"---------------------------------------------------------------";
echo "<br>";
echo"<br>";
echo "6";
echo "<br>";
echo "<br>";


if($num1==$num2){
echo "$num1 == $num2";
}
else
{
echo "$num1 != $num2";
}
echo "<br>";
if($num1 < $num2){
echo "$num1 < $num2";
}
else {
    echo "$num1 > $num2";
}
echo"<br>";
echo "<br>";
echo"---------------------------------------------------------------";
echo "<br>";
echo"<br>";
echo "7";
echo "<br>";
echo "<br>";
//7
if ($num1 > 500 or $num3 > 500){
    echo "$num1 > 500 or $num3 > 500";
}   
echo "<br>";
$num22 =0;
if (!$num22){
    echo"he";
}
else{
    echo"rrr";
}
 
echo"<br>";
echo "<br>";
echo"---------------------------------------------------------------";
echo "<br>";
echo"<br>";
echo "<br>";







        $a = "false";
        $b = 0.0;

       var_dump ($a or $b);//true
       var_dump ($a || $b);//true
       var_dump ($a and $b);//false
       var_dump ($a && $b);//false
       var_dump ($a xor $b);//true



        $c = "abc";
    //
echo $c++;


       echo ++$c;//


         $a = 8;//1000
        $b = 4;// 0100
       var_dump ( $a | $b);//1100
       var_dump ( $a & $b);//0
       var_dump ( $a << 4);//12
       var_dump ( $a >> 4);//12
       var_dump ($a ^ $b);//1100






























?>
    </body>
</html>