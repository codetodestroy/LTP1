<?php
// f) Desenvolva, em PHP, a função buscaTexto($texto, $busca), sendo $texto uma variável string que contém um texto, e $busca, um array que contém palavras a serem buscadas no texto. 
// Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha. 
// A função deverá retornar o $texto com as palavras destacadas em vermelho. (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)

function buscarTexto($texto, $buscar) {


    foreach ($buscar as $palavra) {
        $subs = "<span style='color: red'>" . $palavra . "</span>";
        echo str_replace($palavra, $subs, $texto) . "<br>";
    }
}

buscarTexto("O rato roeu a roupa do rei de Roma", array("Roma", "rato", "roeu"));

?>