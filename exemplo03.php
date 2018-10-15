<?php

$image = imageCreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
$fontBevan = "fonts".DIRECTORY_SEPARATOR."BevanRegular.ttf";
$fontPlayball = "fonts".DIRECTORY_SEPARATOR."PlayballRegular.ttf";

imagettftext($image, 32, 0, 320, 250, $titleColor, $fontBevan, "CERTIFICADO");

imagettftext($image, 32, 0, 375, 350, $titleColor,$fontPlayball,"Amilton Neves Jr");

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
imagejpeg($image);
imagedestroy($image);

 ?>
