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
