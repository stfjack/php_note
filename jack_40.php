<?php
// fread(resource $stream, int $length)
$filename = 'dir1/jack_05.txt';
// 用 filesize 去顯示檔案的bytes大小
$size = filesize($filename);
// 打開檔案，並採取讀取模式檢閱檔案內容
$fp = fopen($filename,'r');

$content = fread($fp, $size);
// 再用fread讀取剛剛顯示檔案大小，檢索長度為檔案 size bytes 的長度
echo $content;

// $fp = fopen('dir1/jack_05.txt','r');

// // $c1 = fread($fp,1);
// // echo $c1;
// // $c1 = fread($fp,1);
// // echo $c1;

// // 一個一個read太慢了，每次只會讀取第一個 

// while($c1 = fread($fp,1)){
//     echo $c1;
// }

fclose($fp);
?>