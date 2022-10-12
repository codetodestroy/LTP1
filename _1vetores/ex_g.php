<?php
$cidades = "Bento Gonçalves, Garibaldi, Caxias do Sul, Farroupilha, Barão";
$lista = explode(",", $cidades);
foreach ($lista as $l) {
    echo $l . "<br>";
}
$outros[] = "Salvador do Sul";
$outros[] = "Cotiporã";
$junta = array_merge($lista, $outros);
foreach ($junta as $j) {
    echo $j . "<br>";
}
echo count($junta) . "<br>";
sort($junta);
$chave = array_search("Farroupilha", $junta);
echo $chave . "<br>";
$tem = in_array("Cotiporâ", $junta);
echo $tem . "<br>";
?>