<?php

    $image = imagecreatefromjpeg("./images/certificado.jpg");

    $titleColor = imagecolorallocate($image, 0, 0, 0);

    $gray = imagecolorallocate($image, 100, 100, 100);

    imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
    imagestring($image, 5, 450, 350, utf8_decode("Gabriel D. Pádua"), $titleColor);
    imagestring($image, 3, 440, 370, "Concluido em: " .date("d/m/Y"), $titleColor);

    header("Content-type: image/jpg");

    imagejpeg($image, './images/certificado-'.date('Y-m-d').'.jpg', 10);

    imagedestroy($image);

