<h1>日期與時間</h1>
<?php
date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s");
?>

<h2>strtotime</h2>
<?php
echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);

$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);
echo "<hr>";
echo $date1.'到'.$date2."有".$days."天";
?>

<h2>計算下次生日天數</h2>
<?php
$date='1974-10-07';
$br=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$br));
$today=strtotime("now");
if ($diff>$today) {
    $days=($diff-$today)/(60*60*24);
}else{
    $diff=strtotime("+1 year",$diff);
    $days=($diff-$today)/(60*60*24);
}
echo "距離下一次生日:".date("Y-m-d",$diff)."還有".floor($days)."天";
// echo "<br>";
// echo strtotime("+1 week"), "\n";
?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php
echo date('Y-m-d')."<br>";
echo date('m月d日 l')."<br>";
echo date('Y-m-d H:i:s')."<br>";
echo date('Y-n-j G:i:s')."<br>";

echo date('今天是西元Y年m月d日');
if (date("N")<=5) {
    echo "上班日";
}else{
    echo "假日";
}

/*
$today=strtotime("now");
echo date($today, 'Y-m-d')."<br>";
echo date($today, 'm月d日 l')."<br>";
echo date($today, 'm月d日 l')."<br>";
*/
?>