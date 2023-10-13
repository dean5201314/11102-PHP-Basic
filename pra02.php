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
for ($j=1; $j <= 9; $j++) { 
    echo "<tr>";
    for ($i=1; $i <= 9 ; $i++) { 
        echo "<td>";
        echo $j.' x '.$i.' = '.($j*$i);
        echo "</td>";
        }
    echo "</tr>";
}

echo "</table>";



?>