<h3>直角三角形</h3>
<?php
for ($i = 0; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

<h3>倒直角三角形</h3>
<?php
for ($i = 5; $i >= 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h2>正三角形</h2>
<?php
 for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>

