<?php
// https://www.php.net/manual/en/function.fopen.php

// fopen 格式 : 打開檔案看內容，達成php讀檔案串流
// fopen(
//     檔案名稱 : string $filename,
//     開啟方式 : string $mode,
//     bool $use_include_path = false,
//     resource $context = ?
// ): resource

// 寫東西，fwrite  (fopen resource,string,length?)

// fwrite($fp,'Hello, World');

// w ( write) mode 唯寫模式，使用這個function的時候會順便清空前面的長度,差不多等於刪除檔案內容。
// $fp = fopen('dir1/jack_05.txt','w');

// a (append) mode 打開檔案，模式為一直往後寫
$fp = fopen('dir1/jack_05.txt','a');


// 雙引號會去解讀跳脫字元，單引號直接輸出字串
fwrite($fp,"ABCDEFG\n7654321\n1234567");
//    關閉檔案 fclose
$fp = fclose($fp);
?>