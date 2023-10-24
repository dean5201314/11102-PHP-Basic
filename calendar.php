<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        table,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        table{
            border: 3px double #999;
            border-collapse: collapse;
        }
        td{
            border: 1px double #999;
            padding: 5px 10px;
            text-align: center;
        }
        .rest{
            background-color: lightpink;
        }    
    </style>
</head>
<body>
<?php
echo "<h3>";
echo date("西元Y年m月");
echo "<h3>";
$thisMonth=date("Y");
$thisFirstDay=date("Y-m-1");
$thisFirstDate=date("w",strtotime($thisFirstDay));
echo $thisFirstDate;
$thisMonthDays=date("t");
$thisLastDay=date("Y-m-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days"));
// echo $thisMonthDays."<br>";
// echo $thisFirstDate."<br>";
// echo $weeks."<br>";
/*
//計算當月有幾周
$firstWeek=date("W",strtotime($thisFirstDay));
$lastWeek=date("W",strtotime($thisLastDay));
$monthWeeks=$lastWeek-$firstWeek+1;
echo $firstWeek."<br>";
echo $lastWeek."<br>";
echo $monthWeeks."<br>";
*/

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";

for ($i=0; $i < 6; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 7; $j++) { 
        echo "<td>";
        $addDays=7*$i+$j;
        $thisCellDate=date("Y-m-d",strtotime("+$addDays days",strtotime($firstCell)));
        if (date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))) {
            echo date("Y-m-d",$thisCellDate);
        }
        echo "</td>";
        /*
        if ($i==0 && $j==$thisFirstDate) {
            $startDays=7*($i+1)-(6-$j)-$thisFirstDate-1;
            $date=strtotime("+$startDays days",strtotime($thisFirstDay));
            echo date("Y-m-d",$date);
        }else{
            $tmp=7*($i+1)-(6-$j)-$thisFirstDate;
            $date=strtotime("$tmp days",strtotime($thisFirstDay));
            echo date("Y-m-d",$date);            
            // echo ",$tmp";
        } 
        $tmp=7*($i+1)-(6-$j)-$thisFirstDate;       
        if($tmp>0 && $tmp<=$thisMonthDays){
            // echo $tmp;
        
        }      
        echo "</td>";
        */  
    }
    echo "</tr>";

}

?>

<h2>西元2023年10月</h2>
<table>
    <tr>
        <td class="rest">日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td class="rest">六</td>
    </tr>
    <tr>
        <td class="rest">1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td class="rest">7</td>
    </tr>
    <tr>
        <td class="rest">8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td class="rest">14</td>
    </tr>
    <tr>
        <td class="rest">15</td>
        <td>16</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td class="rest">20</td>
    </tr>
    <tr>
        <td class="rest">21</td>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
        <td class="rest">27</td>
    </tr>
    <tr>
        <td class="rest">28</td>
        <td>29</td>
        <td>30</td>
        <td>31</td>
        <td></td>
        <td></td>
        <td class="rest"></td>
    </tr>
</table>
    
</body>
</html>