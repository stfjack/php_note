
<!-- 逗點 , 隔開叫做CSV檔案 -->
<table border="1" width='100%'>
<?php
    // function file() 讀取檔案內容，並返回一個array
    $content = file('dir1/maskdata.csv');
    echo gettype($content). '<br />';
    echo count($content);
    // 先去思考怎麼把檔案讀進去，等下剖析資料，使用 foreach 去檢索這個csv array
    foreach($content as $i => $line){
    // 檔案成功以一列一列顯示讀進去，找尋剖析資料的function 
    // str_spilt 用指定個數切開，塞到array裡面，不是這次目標。
    // 用explode切開 用string切開string，塞到array裡面
      $data = explode(',', $line);
        if ($i = 0){
            // 用表格呈現 醫事機構 、成人口罩、兒童口罩
            echo '<tr>';
            echo "<th>{$data[1]}</th>";
            echo "<th>{$data[2]}</th>";
            echo "<th>{$data[3]}</th>";
            echo "<th>{$data[4]}</th>";
            echo "<th>{$data[5]}</th>";
            echo '</tr>';
        }else{
            echo '<tr>';
            echo "<td>{$data[1]}</td>";
            echo "<td>{$data[2]}</td>";
            echo "<td>{$data[3]}</td>";
            echo "<td>{$data[4]}</td>";
            echo "<td>{$data[5]}</td>";
            echo '</tr>';
        }
    }
    
?>

</table>