<?php

$score = 91;
// $score = $score + 20;

echo "我的成績：" . $score;
echo "<br>";
echo "判斷為：";

if ($score >= 60) {
    echo "及格";
} else {
    echo "不及格";
}
echo "<br>";
echo "<br>";

if ($score >= 90 && $score <= 100) {
    $level = 'A';
}
if ($score >= 80 && $score <= 89) {
    $level = 'B';
}
if ($score >= 70 && $score <= 79) {
    $level = 'C';
}
if ($score >= 60 && $score <= 69) {
    $level = 'D';
}
if ($score >= 0 && $score <= 59) {
    $level = 'E';
}
// if ($score > 100 || $score < 0) {
//     // $level = '';
// } else if ($score >= 90) {
//     $level = 'A';
// } else if ($score >= 80)
// {
//     $level = 'B';
// } else if ($score >= 70)
// {
//     $level = 'C';
// } else if ($score >= 60)
// {
//     $level = 'D';
// } else {
//     $level = 'E';
// }

// $level = "B";
echo "成績等級為 " . $level;
echo "<br>";

switch ($level) {
    case 'R':
        echo "成績有誤，請洽老師處裡~";
        break;
    case 'A':
        echo "表現優良，請繼續保持";
        break;
    case 'B':
        echo "值得肯定，還有進步空間";
        break;
    case 'C':
        echo "需要更多的練習";
        break;
    case 'D':
        echo "需要加強基本功";
        break;

    default:
        echo "是否無心學業?";
        break;
}

?>