<?php

//1
$str = 'aaa bbaabbb ccaac ss aass';
$last =  strripos($str, "aa");
echo $str;
echo '<br>';

echo "poslednee vhojdenie - $last ";

//2
echo'<br>';echo '<br>';

$str2 = '1a2b3c4b5d6e7f8g9h0';
$repl = "";

//echo $spaces;
echo '<br>';
$spaces= str_replace(" ","",$spaces);
echo ($spaces);

//3
echo '<br>';echo '<br>';

$main_str = "cajhvbhjdfnm cnhjre ckexfqysvvvv j,hfpov bp ,erd kfnbycrjuj fkafnf ghhjdthbnm tckb lkbyf gjkextyjq cnhjrb";
//echo strlen($main_str);

if (abs((strlen($main_str))) == 0) {
     $main_str =  strtr($main_str, "abcdefghijklmnopqrstuvwxyz", "12345678987654323456789876521");
    echo $main_str;
}
else{
    echo "ne delitsya";
}



//4
echo'<br>';echo '<br>';
$predl = "dano predlojenie iz neskolkih slov";

$list1 = explode(" ",$predl);
$word1 = strtoupper($list1[0]);
$word2 = strtoupper($list1[1]);

$lstword1 = strtoupper($list1[count($list1) - 1]);
$lstword2 = strtoupper($list1[count($list1) - 2]);
$list1[0] = $lstword2;
$list1[1] = $lstword1;
$list1[count($list1) - 1] = $word2;
$list1[count($list1) - 2] = $word1;
$list1 = implode(" ", $list1);
echo $list1;
echo '<br>';echo '<br>';
echo md5($list1);
echo '<br>';
echo crc32($list1);
echo '<br>';
echo sha1($list1);


//5
echo'<br>';echo '<br>';

$strin = "qwAsVBtgkFitvdDsgTer";
echo '<br>';
echo $strin;
echo '<br>';echo '<br>';
$cha1 = substr($strin, 0, round(strlen($strin)/8*3));
$cha2 = substr($strin, round(strlen($strin)/8*3));
echo $cha1;
echo '<br>';
echo $cha2;

$cha1[0] = chr(ord($cha1[0]) + round(strlen($cha1) / 2));
$cha1[round(strlen($cha1)/2)] = chr(ord($cha1[round(strlen($cha1)/2)]) + strlen($cha1) / 2);
$cha1[strlen($cha1)-1] = chr(ord($cha1[strlen($cha1)-1]) + strlen($cha1) / 2);
$cha1 = str_replace("As", "xT", $cha1);
$cha2 = strtolower($cha2);
echo '<br>';echo '<br>';echo '<br>';
$cha2[0] = strtoupper($cha2[0]);
$cha2[strlen($cha2)-1] = strtoupper($str2[strlen($cha2) - 1]);
echo $cha1;
echo '<br>';
echo $cha2;

//6
echo'<br>';echo '<br>';
$Kd=5;
$T=2;
$Khb=4;
$Ybd=11;
$Oh=6;

$Dw=$Kd*((($T**2*$Khb)/($Ybd*(abs($Oh)**2)))**(1/3));
echo ($Dw);

















$a = "azdfqwe sda qweqwe";
echo strlen($a);
echo '<br>';
echo strtoupper($a);
echo '<br>';
echo strpos($a, "df");
echo '<br>';
echo $d = strpos($a, " ");
echo '<br>';
 $aa= strpos($a, " ", $d+1);
echo substr($a, 0, $aa);



?>