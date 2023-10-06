<h2>閏年計算</h2>

<?php
$year = 2000;
echo "年份" . $year;
echo "<hr>";

if ($year%4 == 0) {
    if ($year % 100 != 0) {
        echo $year . "是閏年";
    } else {
        if ($year % 400 == 0) {
            echo $year . "是平年";
        } else {
            echo $year . "是平年";
        }
    }
} else {
    echo $year . "是平年";
}

?>