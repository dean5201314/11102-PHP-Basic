<?php 
$sum=0;
for ($i=1;$i<=10;$i++){
    echo '$sum='.$sum.'&nbsp;&nbsp;'.'$i='.$i.'&nbsp;&nbsp;';
    $sum+=$i;   
    echo '$sum+$i='.$sum.'<br>';
}
?>


<h1>迴圈練習</h1>
<h3>使用for迴圈產生以下的數列</h3>
<ul>
    <li>1,3,5,7,9...n</li>
    <li>10,20,30,40,...n</li>
    <li>3,5,7,11,13,17,...97</li>
</ul>

<?php
$n=10;

for($i=1;$i<=$n;$i+=2){
    echo $i;
    echo ",";
}
echo "<hr>";

for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ",";
}
echo "<hr>";

$a=82;
$flag=true;

for($i=2;$i<($a/2);$i++){
    echo "$a 除以 $i 餘數 ".($a % $i);
    if (($a % $i)==0){
        $flag=false;
        echo "<br>";
        break;
    }
    echo "<br>";
}
if ($flag==true){
    echo $a."是質數";
}else{
    echo $a."不是質數";
}
echo "<hr>";

?>

<h3>陣列</h3>

<?php
echo 'array $a';
echo "<br>";
$a=['甲','乙','丙','丁','戊'];
for($i=0;$i<count($a);$i++){
    echo $a[$i];
}
echo "<hr>";


echo 'foreach $a,$b';
echo "<br>";
foreach($a as $b){
    echo $b;
}
echo "<hr>";

echo 'foreach $a,$idx,$b';
echo "<br>";
foreach($a as $idx=>$b){
    echo $idx."=>".$b;
    echo "<br>";
}

?>