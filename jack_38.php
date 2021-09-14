<?php
    date_default_timezone_set('Asia/Taipei')
    // 宣告這個時區是甚麼?
?>
<table border="1" width="100%">
    <tr>
        <th>Filename</th>
        <th>Dir/File</th>
        <th>Size</th>
        <th>Date_time</th>
    </tr>



<?php
    // PHP 檔案系統 Function 應用
    $dirname = ".";
    $dir = opendir($dirname);

    while($file = readdir($dir)){
        echo "<tr>";
        echo "<td>{$file}</td>";
   // 使用 filesystem 裡面的 function 來查找檔案類型 是不是資料夾或檔案
   // 如果不加dir 等於找尋資料夾或是檔案的function會不知道搜尋的路徑是甚麼
        if(is_dir("{$dirname}/{$file}")){
            echo "<td>Dir</td>";
        }else if(is_file("{$dirname}/{$file}")){
            echo "<td>File</td>";
        }
    // 檔案大小
        echo '<td>' .filesize("{$dirname}/{$file}") . ' bytes' .'</td>';

    // 上一次修改的時間
    // date time 
    // 依照日期排序 , 放進 array function sort ksort krsort
    // 日期格式 https://www.php.net/manual/en/datetime.format.php
    // 但是日期是格林威治時間，所以必須網頁頂部宣告這個時間的時區是甚麼?
        echo '<td>' . date(" Y-m-d H:i:s",filemtime("{$dirname}/{$file}"))  . '</td>';
        echo "</tr>";
    }

    closedir($dir);



?></table>