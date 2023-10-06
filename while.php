<?php
// 初始化總和變數
$total = 0;
// 初始化計數器
$i = 1;
// 使用 while 迴圈從1加到100
while ($i <= 100) {
    echo '$total='.$total.'&nbsp;&nbsp;'.'$i='.$i.'&nbsp;&nbsp;';
    // 將目前的數字加到總和中
    $total += $i;
    echo '$total+$i='.$total.'<br>';
    // 增加計數器
    $i++;
}
// 印出結果
echo "從1加到100的總和是：" . $total;
?>