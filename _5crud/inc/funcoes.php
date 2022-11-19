<?php
function lerPessoa($pdo, $id_pessoa) {

    $sql = "SELECT id_pessoa, ds_nome, ds_email, dt_nasc, cd_sexo, nr_telefone from tb_pessoa where id_pessoa = :id_pessoa";

    $statement = $pdo -> prepare($sql);
    $statement -> bindParam(":id_pessoa", $id_pessoa);
    $statement -> execute();
    # PDO::FETCH_ASSOC - os dados lidos são retornados em um vetor associativo, isto é, 
    # os índices do vetor não são numéricos, são strings, e neste caso
    # serão os nomes das colunas indicados no SELECT
    return $statement -> fetch(PDO::FETCH_ASSOC);
}