<?php
// 获取用户输入的出生日期
$birthdate = readline("请输入您的出生日期（YYYY-MM-DD）：");

// 将出生日期字符串转换为日期对象
$birthdayDate = new DateTime($birthdate);

// 获取当前日期
$currentDate = new DateTime();

// 计算下一个生日的日期，使用当前年份作为参考
$nextBirthday = new DateTime($currentDate->format('Y') . $birthdayDate->format('-m-d'));

// 如果下一个生日已经过去，使用下一年的生日
if ($nextBirthday < $currentDate) {
    $nextBirthday->modify('+1 year');
}

// 计算距离下一个生日的天数
$interval = $currentDate->diff($nextBirthday);
$daysUntilNextBirthday = $interval->days;

// 输出结果
echo "距离下次生日还有 " . $daysUntilNextBirthday . " 天。\n";
?>


/*
<?php
// 定义天干和地支的数组
$tianGan = ["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
$diZhi = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];

// 获取用户输入的西元年份
$year = intval(readline("请输入一个西元年份："));

// 计算甲子年（西元1024年）到用户输入年份的差距
$gap = $year - 1024;

// 计算天干和地支的索引
$tianGanIndex = ($gap % 10 + 10) % 10;
$diZhiIndex = ($gap % 12 + 12) % 12;

// 输出结果
echo "西元" . $year . "年是" . $tianGan[$tianGanIndex] . $diZhi[$diZhiIndex] . "年。\n";

?>
*/