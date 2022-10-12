<?php
$x[0]["nome"] = "Beatriz";
$x[0]["idade"] = 6;
$x[1]["nome"] = "Carlos";
$x[1]["idade"] = 5;
foreach ($x as $v)
    foreach ($v as $z)
        echo $z. "<br>";
?>