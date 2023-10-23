<?php

/*
$cl_score[0][0]='名稱';
$cl_score[0][1]='國文';
$cl_score[0][2]='英文';
$cl_score[0][3]='數學';
$cl_score[0][4]='地理';
$cl_score[0][5]='歷史';

$cl_score[1][0]='Judy';
$cl_score[1][1]='95';
$cl_score[1][2]='64';
$cl_score[1][3]='70';
$cl_score[1][4]='90';
$cl_score[1][5]='84';

$cl_score[2][0]='Amo';
$cl_score[2][1]='88';
$cl_score[2][2]='78';
$cl_score[2][3]='54';
$cl_score[2][4]='81';
$cl_score[2][5]='71';

$cl_score[3][0]='John';
$cl_score[3][1]='45';
$cl_score[3][2]='60';
$cl_score[3][3]='68';
$cl_score[3][4]='70';
$cl_score[3][5]='62';

$cl_score[4][0]='Peter';
$cl_score[4][1]='59';
$cl_score[4][2]='32';
$cl_score[4][3]='77';
$cl_score[4][4]='54';
$cl_score[4][5]='42';


$cl_score[5][0]='hebe';
$cl_score[5][1]='71';
$cl_score[5][2]='62';
$cl_score[5][3]='80';
$cl_score[5][4]='62';
$cl_score[5][5]='64';

echo "<br>";
print_r($cl_score[0]);
echo "<br>";
print_r($cl_score[1]);
echo "<br>";
print_r($cl_score[2]);
echo "<br>";
print_r($cl_score[3]);
echo "<br>";
print_r($cl_score[4]);
echo "<br>";
print_r($cl_score[5]);
echo "<br>";
*/
?>

<h2>利用程式產生陣列</h2>

<?php
$nine=[];

for ($j=1; $j <= 9 ; $j++) {

    for ($i=1; $i <= 9 ; $i++) { 
        $nine[]="$j * $i = ".($j * $i);
    }
}

// print_r($nine);

foreach ($nine as $idx => $value) {
    echo $value."&nbsp;&nbsp;&nbsp;";
    if ($idx%9==8) {
        echo "<br>";
    } 
}

?>
<style>
    table{
        border: 1px solid black;
        border-collapse: collapse;
    }
    table td{
        border:1px solid #666;
        padding:5px 9px;
    }
</style>
<?php
/*
echo "<table>";
echo "<tr>";
foreach ($nine as $idx => $value) {
    if ($idx%9==0) {
        echo "<tr>";
    } 
    echo "<td>";
    echo $value."&nbsp;&nbsp;&nbsp;";
    echo "</td>";
    if ($idx%9==8) {
        echo "</tr>";
    } 
}
echo "<br>";
*/

echo "<table>";
foreach($nine as $idx => $value){
   // echo $value;
    if($idx%9==0) {
       
       echo "<tr>
                <td>$value</td>";
        }else if($idx%9==8){
           echo "<td>$value</td>
            </tr>";
        }else{
           echo "<td>$value</td>";
        }
}
echo "</table>";

?>