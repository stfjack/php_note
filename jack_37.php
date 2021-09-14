<?php
// 檔案系統的資料以及檔案上傳的動作 PHP function
// File System Related Extensions
// PHP >> Manual >> Function Reference >> File System Related Extensions >> Directories Directory >> Functions

// 如果這個方法沒有呼叫成功(檔案開啟路徑錯誤)，不要做這件事情了 die 
    // $fp = opendir('dir2') or die('Server Busy');

    $fp = @opendir('.') or exit('Server Busy');
    // 讀取檔案 > 水流的概念
   
    // 一個是讀到資料 一個是傳回false
    while($dir = readdir($fp)){
        echo $dir . '<br/>';
    }

// 查看 type 是 resource 還是 boolean，如果是 resource 表示有回傳成功
    // echo gettype($fp);

   





    // echo gettype($fp);
    closedir($fp);
?>