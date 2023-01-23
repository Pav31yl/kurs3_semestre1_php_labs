<?php
$a = rand(0, 9);
$b = rand(0, 9);
$res = $a . $a . $a . $b . $b;

$i = imagecreatetruecolor(200, 100);
imagefill($i, 0, 0, imagecolorallocate($i, 255, 255, 255));

$x = random_int(5, 15);
$y = random_int(5, 15);

$sizeAB = random_int(5, 7);
$sizeInd = random_int(2, 4);

Add_noise($i, 400, 250, 400 * 10);

imagechar($i, $sizeAB, $x + 50, $y + 40, $a, imagecolorallocate($i, rand(0, 255), rand(0, 255), rand(0, 255)));
imagechar($i, $sizeInd, $x + 60, $y + 35, '3', imagecolorallocate($i, rand(0, 255), rand(0, 255), rand(0, 255)));
imagechar($i, $sizeAB, $x + 70, $y + 40, '+', imagecolorallocate($i, rand(0, 255), rand(0, 255), rand(0, 255)));
imagechar($i, $sizeAB, $x + 90, $y + 40, $b, imagecolorallocate($i, rand(0, 255), rand(0, 255), rand(0, 255)));
imagechar($i, $sizeInd, $x + 100, $y + 35, '2', imagecolorallocate($i, rand(0, 255), rand(0, 255), rand(0, 255)));

$num = rand(1, 5);
for ($j = 0; $j < $num; $j++) {
    imageline($i, rand(0, 50), rand(1, 100), rand(20, 200), rand(1, 100), imagecolorallocate($i, rand(0, 255), rand(0, 255), rand(0, 255)));
}
session_start();
$_SESSION['Captcha'] = $res;

header("Content-type: image/jpeg");
imagejpeg($i);
imagedestroy($i);

function Add_noise($im, $w, $h, $num)
{
    for ($i = 0; $i < $num; $i++) {
        $color = imageColorAllocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
        imageSetPixel($im, mt_rand(0, $w), mt_rand(0, $h), $color);
    }
}
?>