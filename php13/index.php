<?php
$img = imagecreatetruecolor(500, 500);
$blue = imagecolorallocate($img,64 ,110 , 185);
$pink= imagecolorallocate($img, 246,115 ,165 );
$purple= imagecolorallocate($img,53 ,40 ,94 );
$yellow= imagecolorallocate($img, 255,210 , 5);
$orange= imagecolorallocate($img,234 ,131 , 15);
$darkblue= imagecolorallocate($img,35 , 82, 126);
$darkpink= imagecolorallocate($img,191 ,70 , 121);
$black = imagecolorallocate($img, 10, 11, 13);
$white = imagecolorallocate($img, 255, 255, 255);

imageFilledRectangle($img, 0, 0, imageSX($img), imageSY($img), $white);
//
//
//
imagesetthickness($img, 7);
imagearc($img, 135, 160, 417, 417, 12, 67, $darkblue);//telo
imagearc($img, 250, 250, 200, 215, 0, 360, $purple);
imagesetthickness($img, 4);
imagearc($img, 250, 195, 148, 97, 0, 360, $orange);//kluv
imagefill($img, 250, 195, $yellow);
imagesetthickness($img, 7);
imagearc($img, 230, 147, 148, 97, 65, 135, $orange);
imagearc($img, 301, 221, 136, 77, 230, -72, $orange);

imagearc($img, 215, 130, 76, 86, 0, 360, $darkpink);//glaza
imagearc($img, 288, 130, 76, 86, 0, 360, $darkpink);
imagefilltoborder($img, 215, 160, $darkpink, $white);
imagefilltoborder($img, 280, 140, $darkpink, $white);
imagearc($img, 223, 128, 19, 22, 0, 360, $black);
imagearc($img, 276, 128, 19, 22, 0, 360, $black);
imagearc($img, 280, 145, 146, 51, 250, -50, $darkpink);
imagearc($img, 230, 145, 146, 51, 224, -70, $darkpink);
imagearc($img, 150, 250, 88, 88, 130, 280, $purple);//babo4ka
imagearc($img, 127, 209, 56, 150, 360, 100, $purple);
//imagearc($img, 139, 207, 44, 90, 0, 80, $purple);


imagearc($img, 350, 250, 88, 88, 260, 35, $purple);
imagearc($img, 372, 210, 56, 150, 63, 180, $purple);
//imagearc($img, 339, 207, 44, 90, 0, 80, $purple);
imagesetthickness($img, 4);
imageline($img, 233, 270, 253, 284, $purple);//lapi
imageline($img, 253, 284, 279, 273, $purple);
imageline($img, 279, 273, 275, 307, $purple);
imageline($img, 275, 307, 253, 291, $purple);
imageline($img, 253, 291, 228, 303, $purple);
imageline($img, 228, 303, 233, 270, $purple);
imageline($img, 108, 270, 120, 247, $purple);
imageline($img, 120, 279, 130, 258, $purple);
imageline($img, 380, 275, 359, 253, $purple);
imageline($img, 390, 266, 378,243 , $purple);
imagesetthickness($img, 12);
imageline($img, 225, 352, 220, 403, $purple);//nogi
imageline($img, 200, 397, 221, 384, $purple);
imageline($img, 241, 400, 221, 384, $purple);
imageline($img, 274, 352, 277, 403, $purple);
imageline($img, 256, 400, 275, 383, $purple);
imageline($img, 298, 396, 275,383 , $purple);
imagesetthickness($img, 2);
imageline($img, 206, 400, 213, 395, $orange);//v nogah
imageline($img, 233, 401, 227, 396, $orange);
imageline($img, 265, 400, 271, 395, $orange);
imageline($img, 291, 399, 282, 395, $orange);
imagesetthickness($img, 4);
imageline($img, 213, 395, 214, 390, $orange);
imageline($img, 227, 396, 227, 389, $orange);
imageline($img, 271, 395, 271, 390, $orange);
imageline($img, 282, 395, 282, 389, $orange);






//
//
//
imagefilltoborder($img, 372, 230, $purple, $blue);
imagefilltoborder($img, 132, 230, $purple, $blue);
imagefill($img, 320, 320, $darkblue);
imagefill($img,250,250,$blue);
imagefill($img, 266, 287, $purple);
imagefilltoborder($img, 215, 110, $darkpink, $pink);
imagefilltoborder($img, 280, 110, $darkpink, $pink);
imagefill($img, 223, 128, $black);
imagefill($img, 276, 128, $black);


//
//
//
header("Content-type: image/png");
//imagepng($img);
//imagedestroy($img);

if($img && imagefilter($img, IMG_FILTER_PIXELATE, 5))
{
    imagejpeg($img);
}
imagedestroy($img);

?>