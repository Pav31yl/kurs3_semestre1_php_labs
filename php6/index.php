<?php
//3 отсортировать массив по убыванию по значению и ключу
$mass = array("alisa" => "27", "natalia" => "41", "kristian" => "30", "anton" => "18");
print_r($mass);
echo '<br>';
arsort($mass);
print_r($mass);
krsort($mass);
echo '<br>';
print_r($mass);

//7 получить самый большой ключ в массиве
echo '<br>';
echo '<br>';
$array = array(10 => 1, 50 => 6, 80 => 8, 100 => 10, 12 => 16, 101 => 78);
print_r($array);
krsort($array);
$a=(array_keys($array));
echo '<br>';
var_dump($a[0]);


//2 вставить после элемента со значением 3 элемент 7 и вывести массивы
echo '<br>';
echo '<br>';
$x = array(1,2,3,4,5);
print_r($x);
$y = array_slice($x, 0, 3);
$z = array_slice($x, count($y));
echo '<br>';

array_push($y, 7);
$f = array_merge($y,$z);
print_r($f);

//6 получить самую короткую и длинную строки массива
echo '<br>';
echo '<br>';

function cmp($a, $b) {
    if (strlen($a) == strlen($b)) {
    return 0;
    }
    return (strlen($a) > strlen($b)) ? -1 : 1;
    }

    $x = array("abcd", "abc", "de", "alnyf", "g", "wer");
    uasort($x, 'cmp');
    $ee = array_reverse($x);
echo $ff = array_shift($ee);

    $ee = array_reverse($ee);
echo '<br>';
echo '<br>';
   echo $ff = array_shift($ee);

echo '<br>';
echo '<br>';
echo '<br>';





















$arr = array(1, 2, 4, 5,7,8,8,8,8,4,4,4,9);

$arr2 = array(10, 11, 12);

array_splice($arr, 4, 0,$arr2);


var_dump($arr);
echo '<br>';
echo '<br>';
echo '<br>';
$ee= array_slice($arr, count($arr) - 3);
var_dump($ee);
echo '<br>';
echo '<br>';
krsort($arr);
print_r($arr);
sort($arr);

echo '<br>';
echo '<br>';
print_r($arr);

echo '<br>';
echo '<br>';
$s = array_count_values($arr);

var_dump($s[8]);
var_dump($s[4]);





?>