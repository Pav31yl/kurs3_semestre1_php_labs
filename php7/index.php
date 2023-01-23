<?php
//1
        $t = "Лето. Жарко! А тебе?";
        $l = 0;
        $arr = [];
        for ($i=0; $i < strlen($t); $i++) { 
            if ($t[$i] === '.' || $t[$i] === '!' || $t[$i] === '?' ) {
                $buf = substr($t, $l, $i - $l+1);
                array_push($arr, $buf);
                $l=$i+1;
            }
        }
        var_dump($arr);
echo '<br>';
echo '<br>';
//2
/*

function Task2() {
    $a = 5;
    $n = 4;
    $counter = 2;
    if ($counter === $n) return $a ** (1 / $counter);
    else {
        $counterbuf = $counter++;
        $buf = ($a + Task2()) ** (1 / $counterbuf);
    }
    return $buf;
}
var_dump(Task2());
*/
echo '<br>';
echo '<br>';

//3
 $negmul = 1;
$N = array(1, -2, -3, 3, 2);
foreach ($N as $item)
{
    if ($item > 0)
        {
        $poscount++;
        $posplus += $item;
        }
        else {
        $negcount++;     
        $negmul *= $item;

        }
}
echo $poscount;
echo '<br>';
echo $posplus;
echo '<br>';
echo $negcount;
echo '<br>';
echo $negmul;

echo '<br>';
echo '<br>';
//4

$A = array(
    array(1, 3, 2),
    array(4, 3, 5),
    array(3, 1, 2),
);
$counter = 0;
for ($i=0; $i < count($A); $i++) { 
    var_dump(($A[0][$i] + $A[1][$i] + $A[2][$i])/3);
}
echo '<br>';
echo '<br>';
//5

$n = 3;
$x = 2;
for ($i=1; $i < $n ; $i++) {
    $aa += pow(sin($x), $i);
}
echo $aa;
echo '<br>';
for ($i=1; $i < $n ; $i++) {
    $aa += sin(pow($x, $i));
}
echo $aa;
echo '<br>';
for ($i=1; $i < $n ; $i++) {
    $aa += pow(sin(pow($x, $i)),$i);
}
echo $aa;
echo '<br>';

echo '<br>';
echo '<br>';
//6
$arr = [2, -10, 17, 35, 0];
print_r($arr);
echo '<br>';
$max = 0;
$min = 0;

for ($i=1; $i < count($arr)-1; $i++) { 
    if ($arr[$max]< $arr[$i]) $max = $i;
    if ($arr[$min]> $arr[$i]) $min = $i;
}
// var_dump($max);
// var_dump($min);

$buf = $arr[$max];
$arr[$max] = $arr[$min];
$arr[$min] = $buf;

print_r($arr);
echo '<br>';

echo '<br>';
echo '<br>';
//7
$arr = [4,-3,-5,6,8,-3,-1];
print_r($arr);
echo '<br>';
echo '<br>';
        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] > 0) $arr[$i] /= 2;
            elseif ($arr[$i] < 0) $arr[$i] = $i;
        }

        print_r($arr);

echo '<br>';
echo '<br>';
//8
$arr = [1,3,-1,5,7];
print_r($arr);
echo '<br>';
echo '<br>';
$arr2 = [];
$cum= 0;
for ($i=0; $i < count($arr); $i++)
{
    $cum += $arr[$i];
    array_push($arr2,$cum/($i+1));

}
print_r($arr2);

echo '<br>';
echo '<br>';
//9
$arr = [2,-3,0,-6,10,7];
print_r($arr);
echo '<br>';
echo '<br>';
$arr2 = [];
$arr3 = [];
$cum= 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($i % 2 == 0){
        $cum = $arr[$i];
        array_push($arr2, $cum);
    }
    else{
        $cum = $arr[$i];
        array_push($arr3, $cum);
        
    }
}
print_r($arr2);
echo '<br>';
print_r($arr3);

echo '<br>';
echo '<br>';
//10
$arr = [-2, 5, -1, 7, 0];
$max = -99999;
$min = 99999;

for ($i=0;$i < count($arr);$i++){
    if($arr[$i]>0 && $arr[$i]<$min)
    {
         $min=$arr[$i] ;
    }
    elseif ($arr[$i]<0 && $arr[$i]>$max){
        $max = $arr[$i];
    }
}
echo $min;
echo '<br>';
echo $max;
echo '<br>';
rsort($arr);
echo $arr[1];




echo '<br>';
echo '<br>';

$f=0;
$sum = 0;
$mat = array(
    array(1,2,3),
    array(1,23,3),
    array(1,2,13),
    array(1,2,3),
);

for ($j = 0; $j <4; $j++) {
    $sum += $mat[$j][2];
    for ($n = 0; $n < 3; $n++) {
        echo $mat[$j][$n];
        
        if ($mat[$j][$n] == 23)
        {
            $f = $mat[$j][$n];
        }

    }
   
    
    

 
    
    echo '<br>';
}
echo $sum;
if ($f != 0)
    {
        echo "est";
    }
echo '<br>';
echo '<br>';

$ar = range(1, 10);
foreach ($ar as $key1=>$item1)
{

    echo $key1. "-", $item1. ' ';
}












?>