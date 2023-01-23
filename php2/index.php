<html>
<head>
    <title>laba 2</title>
</head>
<body>

<?php

//bool
$var = "Bob";
$Var = "Joe";
echo "$var, $Var";      // выведет "Bob, Joe"

echo "<br>";
echo "<br>";
//int
$x = True; // присвоить $x значение TRUE
$a = 1234; 
echo "\n$a\n";
$a = 0b10; 
echo "$a\n";
$a = 0123;
echo "$a\n"; // восьмеричное число (эквивалентно 83 в десятичной системе)
$a = 0x1A;
echo "$a\n"; 

echo "<br>";
echo "<br>";
//float
$b = 1.2e3;
echo "$b\n";
$c = 7E-10;
echo "$c\n";

echo "<br>";
echo "<br>";
//string 
$misha = <<<EOD
misha
misha 
cheslav
EOD;
echo "$misha\n";
$strrr = "12345";
echo "$strrr";

echo "<br>";
echo "<br>";
//array
$arr[0][0]="misha";
$arr[0][1]="cheslav";
$arr[1][0]="misha";
$arr[1][1]="lesha";
$arr[1][2]="pasha";
$arr[2][0]="grisha";
echo "".$arr[0][1]."\n";

$arr2["misha"] = "nemisha";
echo $arr2["misha"]."\n";

$mass["Lin"]["name"]="cheslav";
$mass["Lin"]["age"]="13";
$mass["Lin"]["email"]="cheslav@gigachad.net";
$mass["Voz"]["name"]="misha";
$mass["Voz"]["age"]="14";
$mass["Voz"]["email"]="misha@megakrut.com";
echo "<br>";
echo "".$mass["Lin"]["name"]."\n".$mass["Lin"]["age"];
echo "<br>";
echo "".$mass["Voz"]["email"]."\n".$mass["Voz"]["name"];
$we["asdad"] = array("name"=>"qwe", "fr"=>"qwew");

































$rrr = array("qewqw","eqwq");





$ewqwe["wqewe"]= array("xcx"=>"wqeqe","qweqw");
$ewqwe["wqewe1"]= array("xcx"=>"123wqeqe","eqwe"=>"123eqw");
$ewqwe["wqewe2"]= array("xcx"=>"wqeqe","eqwe"=>"qweqw");
echo $ewqwe["wqewe"][0];

?>


</body>
</html>
