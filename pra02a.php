<style>
    table{
        border: 1px solid black;
        border-collapse:collapse;
    }
    td{
        border: 1px solid black;
        padding: 3px 9px;
    }
</style>
<h2>九九乘法表</h2>
<?php

echo "<table>";
for ($j=0; $j <= 9; $j++) { 
    if ($j==0) {
        echo "<tr style='background:#eee'>";
    }else{
        echo "<tr>";
    }
    for ($i=0; $i <= 9 ; $i++) { 
        if ($i==0) {
            echo "<td style='background:#eee'>";
        }else{
            echo "<td>";
        }
        if ($j>0 and $i>0) {
            if ($j<$i) {
                echo "";
            }else{
                echo ($j*$i);
            }            
        }else if ($j==0) {
            if ($i>0) {
                echo $i;
            }else{
                echo "&nbsp";
            }            
        }else if ($i==0) {
            echo $j;
        }
        echo "</td>";
    }        
    echo "</tr>";
}
echo "</table>";


?>