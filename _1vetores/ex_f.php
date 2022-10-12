<?php
$p[] = "Joaquim";
$p[] = "Lindalva";
$p[] = "Ribamar";
$p[] = "Beatriz";
$p[] = "Carlos";
$p[] = "Carlos José";
$p[] = "Beatriz";
$quant = count($p);
echo "Quant: " . $quant . "<br>";
unset($p[2]);
foreach ($p as $s) {
    echo $s . "<br>"; 
}
$v = array_unique($p);
foreach ($v as $r) {
    echo $r . "<br>";
}
?>