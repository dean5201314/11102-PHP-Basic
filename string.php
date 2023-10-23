<h2>字串取代</h2>
將”aaddw1123”改成”*********”
<?php
$s="aaddw1123";
echo "<br>";
$t=str_replace(['a','w',1],'*',$s);
echo $t;
echo "<br>";
echo str_repeat("*",mb_strlen($s));
?>

<h2>字串分割</h2>
將”this,is,a,book”依”,”切割後成為陣列
<?php
$s="this,is,a,book";
$a=explode(',',$s);

echo "<pre>";
print_r($a);
echo "<pre>";
?>

<h2>字串組合</h2>
將上例陣列重新組合成“this is a book”
<?php
$s="this,is,a,book";
$a=explode(',',$s);
$t=implode(',',$a);

echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
print_r($t);
echo "<pre>";
?>

<h2>子字串取用</h2>
將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
<?php
$s="The reason why a great man is great is that he resolves to be a great man";
$a=mb_substr($s,0,10);

echo "<pre>";
echo $a."...";
echo "<pre>";

$cs="今天天氣真的是不太好的樣子";
$a=substr($s,0,3);
$b=mb_substr($s,0,10);
echo $cs;
echo "<pre>";
echo substr($cs,0,6);
echo "<pre>";
echo mb_substr($cs,0,6);
echo "...";
echo "<pre>";

?>


<h2>尋找字串與HTML、css整合應用</h2>
給定一個句子，將指定的關鍵字放大
“學會PHP網頁程式設計，薪水會加倍，工作會好找”
請將上句中的 “程式設計” 放大字型或變色.
<?php
$cs="學會PHP網頁程式設計，薪水會加倍，工作會好找";
// $ts="程式設計";
$ts="薪水";
$pos=mb_strpos($cs,$ts);
/*
echo "<pre>";
echo $pos;
echo "<pre>";
*/
$a=$cs;
$head="<span style='font-size:20px;color:red'>";
$tail="</span>";
$ns=mb_substr($cs,0,$pos).$head.$ts.$tail.mb_substr($cs,($pos+mb_strlen($ts)),mb_strlen($cs));
echo $ns;
?>



