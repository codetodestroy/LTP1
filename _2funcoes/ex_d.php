<?php
// d) Formatar um número como CPF (###.###.###-##, onde # representa um dígito). 
// Sugestão: completar com zeros a esquerda se a quantidade de dígitos for menor que 11. Use a função mb_strlen() para descobrir a quantidade de dígitos. 
// E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF.

function formatarCPF($cpf) {
    
    $qntN = mb_strlen($cpf);

    while ($qntN < 11) {
        $cpf = "0" . $cpf; 
        $qntN++;
    }

    $p1 = mb_substr($cpf, 0, 3);
    $p2 = mb_substr($cpf, 3, 3);
    $p3 = mb_substr($cpf, 6, 3);
    $p4 = mb_substr($cpf, 9, 2);

    $cpf = $p1 . "." . $p2 . "." . $p3 . "-" . $p4;
   
    return $cpf;
}

echo formatarCPF("78979723456");
?>