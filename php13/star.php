<?php
    $image = imagecreatetruecolor(1400, 900);
    imagefill($image, 0, 0, $background);
    $yellow = imagecolorallocate($image,255,255,0);
    $black = imagecolorallocate($image,255,255,255);   
     $x = rand(0,5);
     //echo $x;
    for ($i = 0, $j = 0; $i < $x; $i++, $j+=65){
        $coords = array(
            700+$j, 320,
            720+$j, 320,
            730+$j, 300,
            740+$j, 320,
            760+$j, 320,
            745+$j, 335,
            755+$j, 355,
            730+$j, 345,
            705+$j, 355,
            715+$j, 335,
        
        
        );
        
        imageFilledPolygon($image, $coords, 10, $yellow);
        imagepolygon($image, $coords, 10, $black);
        
     }

 header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>