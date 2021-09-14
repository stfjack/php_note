<?php
    // 使用 GD 外掛的 image function
    $img = imagecreatefromjpeg("imgs/coffee.jpeg");

    $blue = imagecolorallocate($img,0,0,255);
    
    // imagefttext(
    //     GdImage $image,
    //     float $size,
    //     float $angle,
    //     int $x,
    //     int $y,
    //     int $color,
    //     string $font_filename,
    //     string $text,
    //     array $options = []
    // ): array|false

    imagefttext($img,36,rand(0,60)-30,100,180,$blue,'jack.ttf',rand(0,9));
    imagefttext($img,36,rand(0,60)-30,100+28*1,180,$blue,'jack.ttf',rand(0,9));
    imagefttext($img,36,rand(0,60)-30,100+28*2,180,$blue,'jack.ttf',rand(0,9));
    imagefttext($img,36,rand(0,60)-30,100+28*3,180,$blue,'jack.ttf',rand(0,9));

    header('content-type:image/jpeg');
    imagejpeg($img);

    imagedestroy(($img));

    // imagecopyresized  等比例的縮放
    // 作業:圖片裁切

    // 延伸的問題 如果用前端gulp套件進行壓縮及改變圖片屬性(eg:jpg to webp)，但還是會在上傳及傳遞資料給庫客戶端的過程消耗流量

    
?>