<?php
//1

$textio = "123123texttext riba ";
$create = fopen('z1.txt', 'w+');
fwrite($create, $textio );

//2
$stream1 = fopen("file2_1.txt", "r");
    $stream2 = fopen("file2_2.txt", "r");

    echo $file1 = fread($stream1, 100) . '<br>';
    echo $file2 = fread($stream2, 100) . '<br>';

    $first = [];
    $both = [];
    $multiple = [];

    $file1Arr = explode("\n", $file1);
    $file2Arr = explode("\n", $file2);

    $file1Count = array_count_values($file1Arr);
    $file2Count = array_count_values($file2Arr);

    fclose($stream1);
    fclose($stream2);

    foreach ($file1Arr as $word) {
        $inFile1 = array_search($word, $file1Arr);
        $inFile2 = array_search($word, $file2Arr);

        if($inFile1 !== false && $inFile2 === false && array_search($word, $first) === false) {
            array_push($first, $word);
        }

        if($inFile1 !== false && $inFile2 !== false && array_search($word, $both) === false) {
            array_push($both, $word);
            if($file1Count[$word] > 1 && $file2Count[$word] > 1 && array_search($word, $multiple) === false) {
                array_push($multiple, $word);
            }
        }
    }    
    $stream3 = fopen("file2_3.txt", "w+"); 
    fwrite($stream3, "Уникальны для первого: " . implode(" ", $first));
    fwrite($stream3, "\nВстречаются в обоих: " . implode(" ", $both));
    fwrite($stream3, "\nВстречаются больше одного раза в обоих: " . implode(" ", $multiple));
    fclose($stream3);
echo '<br>';
echo '<br>';
//3
var_dump(file('file3.txt'));
$sorter = explode(' ', file('file3.txt')[0]);
sort($sorter);
print_r(implode(' ', $sorter));


//4
$array = [];

$file = file("file4_1.txt");


foreach ($file as $key => $value) {
    array_push($array, explode(":", $value));
}

sort($array);

for ($i = 0; $i < count($array); $i++) {
    $flag = false;
    for ($j = 0; $j < count($array); $j++) {
        if (
            ($i != $j) &&
            (($array[$i][1] == $array[$j][1]) ||
                ($array[$i][0] == $array[$j][0]))
        ) {
            unset($array[$j]);
            $flag = true;
        }
    }
    if ($flag) {
        sort($array);
        $i = -1;
    }
}

sort($array);

$fs = fopen("file4_2.txt", 'w');
foreach ($array as $key => $value) {
    fwrite($fs, implode($value, ":") . "\n");
}
fclose($fs);
echo '<br>';
echo '<br>';
//5
$filename = "file2_1.txt";

file_exists($filename) or die("файл не существует");
if (is_file($filename)) {
    $reg = "/.+(\.\w{1,})/";
    preg_match($reg, $filename, $type);
    if ($type != null)
        echo ("<br>Расширение: " . $type[1] . "<br>");

    $reg = "/(\\\)/";

    preg_match($reg, $filename, $type);
    echo ("Тип: ".$type . "<br>");
    echo ("Название : " . $filename . "<br>");
    echo ("Размер: " . filesize($filename) . "<br>");
    echo ("Дата последней модификации: " . date("F d Y H:i:s.", filemtime($filename)));
} else {
    echo ("<br>Тип: folder<br>");
    echo ("Название: " . $filename . "<br>");
    echo ("Размер: -- <br>");
    echo ("Дата последней модификации: " . date("F d Y H:i:s.", filemtime($filename)));
}

?>

<form action="index.php" method="get">
       
        <input type="text" name="mail" placeholder="email" required>
        
        <input type="text" name="text"  placeholder="text" required>
        <button>Отправить</button>
    </form>
    <?php 
    if(isset($_GET['mail']) && isset($_GET['text'])){
        $date = date ("F d Y H:i:s");
        $e6 = fopen('./zadanie6/' . rand(1,1000) . '.txt', 'w');
        fwrite($e6, $_GET['mail']);
        fwrite($e6, ':');
        fwrite($e6, $_GET['text']);
        fwrite($e6, ':');
        fwrite($e6, $date);
        fclose($e6);
    }
    $dir = 'zadanie6';
    $catalog = scandir($dir);
    for ($i=2; $i < count($catalog); $i++) { 
        
        $eBuf = fopen('./zadanie6/' . $catalog[$i], 'r');
        $t = fread($eBuf, 300);
        echo ($t . '<br>');
        fclose($eBuf);
    }

    $e7 = file('./zadanie7/tovar.txt');
    foreach ($e7 as $key => $value) {
        echo '<form action="index.php" method="get">';
        echo '<input type="text" name="name" placeholder="name" required>';
        echo '<input type="text" name="count" placeholder="count" required>';
        echo '<input type="text" name="tovar" value="'.$value.'" hidden>';
        echo '<b>'.$value.'</b>';
        echo '<button>Отправить</button>';
        echo '</form>';
    }

    if (isset($_GET['name']) && isset($_GET['count']) && isset($_GET['tovar'])) {
        $eBuf = fopen('./zadanie7/zakaz.txt', 'a');
        preg_match('/\b\w*(?=-)/', $_GET['tovar'], $match);
        $data = '///'.$_GET['name'].'-'.$_GET['count'].'-'.$match[0];
        fwrite($eBuf, $data);
        fclose($eBuf);
    }

    