<?php
$a=[];
$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
// echo "<br>";
echo $a[3];

echo "<hr>";
$b=[];
$b['姓名']='蕭智仁';
$b['最高學歷']='台科大';
$b['tel']='0987190131';
$b['血型']='A';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['tel'];
// echo "<br>";


echo "<hr>";
$c=[];
$c['name']='蕭智仁';
$c['興趣']=['閱讀','下棋','聽音樂'];
echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['興趣'][0];
echo $c['興趣'][1];

?>