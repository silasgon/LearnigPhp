<?php

$font = array("Bevan"=>__DIR__.DIRECTORY_SEPARATOR."fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf",
    "Playball"=>__DIR__.DIRECTORY_SEPARATOR."fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf");

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image, 100,100,100);

imagettftext($image,32,0,320,250, $titleColor, $font["Bevan"],"CERTIFICADO" );
imagettftext($image,32,0,375,350, $titleColor, $font["Playball"], utf8_decode("Silas Gonçalves"));
imagestring($image,3,440,370, utf8_decode("Concluído em: ").date("d/m/y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

