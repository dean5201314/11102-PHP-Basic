<?php 
$sum=0;
for ($i=1;$i<=100;$i++){
    echo "sum=".$sum."&nbsp;&nbsp;"."i=".$i."&nbsp;&nbsp;";
    $sum=$sum+$i;   
    echo "sum+i=".$sum."<br>";
}
?>