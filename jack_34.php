<?php

    // 1. 畫布 Canvas
    // 2. 作畫
    // 3. 輸出 (Browser / File)
    // 4. 清除

    // step 1
    // GD 本身是外掛，檢查 GD 有沒有 enabled 

    // $rate = 50; // 50% 使用變數控畫畫大小
    // 直接 url 下參數 http://localhost:8080/phpd01/jack_34.php?rate=90 
    if(isset($_GET['rate'])){
        $rate = $_GET['rate'];
    }else{
        $rate = 0;
    }

    // $rate = $_GET['rate'];
    $width = 400;
    $img = ImageCreate(400, 24);

    // step 2
    // echo gettype($img); // 記憶體的位址指標
    
    $red = imagecolorallocate($img, 255, 0, 0);
    imagefilledrectangle($img, 0, 0, $width, 24, $red);
    $yellow = imagecolorallocate($img, 255, 255, 0);
    imagefilledrectangle($img, 0, 0, $width*($rate/100), 24, $yellow);

    // step 3
    // http 通訊協定傳送的關鍵字，帶出以下的內容
    // 也有可能 'Content-type : image/png'

    header('Content-type: image/jpeg');
    imagejpeg($img);
    // step 4
    ImageDestroy($img);

    // 同學。如果是倒數計時，隨著時間改變 rate ，請問怎麼做。
    // 如果倒數計時使用後端，伺服器會很有負擔
?>