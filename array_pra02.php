<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php

echo "Sample code：<br>";
$num=[];

while(count($num)<6){
    $tmp= rand(1,38);
    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n . ",";
}

echo "<br><hr><br>";
echo "MY code：<br>";
$num = [];
while (count($num) < 6) {
    $tmp = rand(1, 38);
    if (!in_array($tmp, $num)) {
        $num[] = $tmp;
    }
}
for ($i=0; $i < 6 ; $i++) { 
    echo rand(1,38).",";
}

/*
$num=[];
for ($i=0; $i < 6 ; $i++) { 
    $tmp=rand(1,38);    
    if (!in_array($tmp,$num)) {
        $num[]=$tmp;
    }
}
for ($i=0; $i < 6 ; $i++) { 
    echo rand(1,38).",";
}
*/

/*
$num=[];
$stop=0;
$i=0;

while ($stop <= 0) {
    $j=0;
    $j=rand(1,49);
    if (in_array($j,$num)) {
        $num[$i]=
    } else {
        # code...
    }
}
*/

?>